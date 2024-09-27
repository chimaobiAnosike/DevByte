<!DOCTYPE html>
<html lang="en">


<?php include_once './includes/header.php'; ?>
<?php include_once "./authentication.php"; ?>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include "./includes/topbar.php"; ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include "./includes/leftnavbar.php"; ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <?php include "message.php" ?>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor"></h4>
                    </div>

                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <button type="button" class="btn  btn-primary d-none d-lg-block m-l-15"><a
                                    href="view-post.php" class="text-white">Back</a></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php include_once "./message.php"; ?>

                        <div class="card">
                            <div class="card-body">


                                <?php

                                $id = $_GET['id'];
                                $result = $datcon->query("SELECT * FROM post WHERE id = '$id'");

                                if ($result && $unzip = $result->fetch_assoc()) {
                                ?>


                                    <div class="row mb-3 no-gutters">
                                        <!-- Image Section -->
                                        <div class="col-md-3 img-post">
                                            <img src="./uploads/post/<?= htmlspecialchars($unzip['image']) ?>"
                                                class="img-fluid"
                                                alt="Post Image"
                                                style="width: 200px; height: 200px; object-fit: contain;">
                                        </div>
                                        <div class="col-md-5 text-start">
                                            <h4 class="mb-2">
                                                <strong>Title:</strong> <?= htmlspecialchars($unzip['name']) ?>
                                            </h4>
                                            <h5 class="mb-2">
                                                <strong>Category:</strong> <?= htmlspecialchars($unzip['category']) ?>
                                            </h5>
                                            <h6 class="mb-2">
                                                <strong>Status:</strong> <?= htmlspecialchars($unzip['status']) ?>
                                            </h6>
                                        </div>

                                        <!-- Button Section -->
                                        <div class="col-md-4 text-end d-flex align-items-start">
                                            <button data-statusid="<?= $unzip['id'] ?>" data-status="<?= $unzip['status'] ?>"
                                                data-url="post-pub.php"
                                                class="stat-btn btn btn-<?= ($unzip['status'] == 'pending' || $unzip['status'] == 'unpublish') ? 'success' : 'warning' ?>">
                                                <?= ($unzip['status'] == 'pending' || $unzip['status'] == 'unpublish') ? 'publish' : 'unpublish' ?>
                                            </button>
                                            <a data-toggle="modal" data-target="#editPost<?= $unzip['id'] ?>" href="#" class="btn btn-info mx-2">Edit</a>
                                            <button data-url="post-delete.php" data-id="<?= $unzip['id'] ?>" class="btn btn-danger post-del">Delete</button>
                                        </div>
                                    </div>

                            </div>
                        </div>

                        <!-- Description Section (Below the row) -->
                        <div class=" row mt-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?= html_entity_decode($unzip['description']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Modal -->
                        <div id="editPost<?= $unzip['id'] ?>" class="modal fade bs-example-modal-lg"
                            tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">Edit Post</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <form class="form" action="postedit.php" method="post"
                                        enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group mt-5 row">
                                                <label for="catid-input" class="col-2 col-form-label">Category
                                                    List</label>
                                                <div class="col-10">
                                                    <select name="category" class="form-control" required
                                                        id="catid-input">
                                                        <option value="">-- Select a Category --</option>
                                                        <?php
                                                        $result2 = $datcon->query("SELECT * FROM categories");
                                                        while ($unzip2 = $result2->fetch_assoc()) { ?>
                                                            <option
                                                                value="<?= htmlspecialchars($unzip2['ctitle']) ?>"
                                                                <?= ($unzip2['ctitle'] == $unzip['category']) ? 'selected' : '' ?>>
                                                                <?= htmlspecialchars($unzip2['ctitle']) ?> category
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mt-5 row">
                                                <label for="text-input"
                                                    class="col-2 col-form-label">Title</label>
                                                <div class="col-10">
                                                    <input required class="form-control" type="text" name="name"
                                                        id="text-input"
                                                        value="<?= htmlspecialchars($unzip['name']) ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="description-input"
                                                    class="col-2 col-form-label">Description</label>
                                                <div class="col-10">
                                                    <textarea name="description" class="form-control"
                                                        id="editor"
                                                        rows="10"><?= htmlspecialchars($unzip['description']) ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="img-input"
                                                    class="col-2 col-form-label">Image</label>
                                                <div class="col-10">
                                                    <input type="file" name="image" id="img-input"
                                                        class="form-control">
                                                    <input type="hidden" name="image_old"
                                                        value="<?= htmlspecialchars($unzip['image']) ?>">
                                                    <img src="./uploads/post/<?= htmlspecialchars($unzip['image']) ?>"
                                                        width="50px" height="50px" alt="Current Image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" name="id"
                                                value="<?= htmlspecialchars($unzip['id']) ?>">
                                            <button type="submit" name="edit-postbtn"
                                                class="btn btn-info waves-effect waves-light">Save
                                                changes</button>
                                            <button type="button" class="btn btn-danger waves-effect text-left"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Delete Modal -->
                        <div id="delModal<?= $unzip['id'] ?>" class="modal fade bs-example-modal-lg"
                            tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">DELETE POST</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <form action="post-delete.php" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                Are You Sure You Want To Delete?
                                                <input type="hidden" name="post-title"
                                                    value="<?= htmlspecialchars($unzip['name']) ?>"
                                                    class="form-control" id="post-title">
                                                <input type="hidden" name="post-id"
                                                    value="<?= htmlspecialchars($unzip['id']) ?>">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" id="categoryModalActionButton"
                                                name="post_delete"
                                                class="btn btn-danger waves-effect waves-light">Delete
                                                Post</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    <?php
                                } else {
                                    echo '<p class="text-danger">Post not found.</p>';
                                }
                    ?>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    <?php include "./includes/rytnavbar.php"; ?>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <?php include "./includes/footer.php"; ?>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php include "./includes/script.php"; ?>

    <div id="responsive-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-align">Add Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form action="cat.php" method="post">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="ctitle" class="control-label">Title:</label>
                            <input type="text" name="ctitle" class="form-control" id="ctitle">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" name="category_add" class="btn btn-danger waves-effect waves-light">Save
                            changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Manage Category Modal -->
    <div class="modal fade" id="manageCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryModalTitle">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="manageCategoryForm" method="post">
                        <div class="mb-3">
                            <label for="category" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="category" name="category" required>
                        </div>
                        <input type="hidden" id="categoryId" name="categoryId">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="categoryModalActionButton">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showAddModal() {
            document.getElementById('categoryModalTitle').innerText = 'Add Category';
            document.getElementById('categoryModalActionButton').innerText = 'Add Category';
            document.getElementById('manageCategoryForm').action = 'categoryprocess';
            clearModalFields();
        }

        function showEditModal(id, category, date) {
            document.getElementById('categoryModalTitle').innerText = 'Edit Category';
            document.getElementById('categoryModalActionButton').innerText = 'Save Changes';
            document.getElementById('manageCategoryForm').action = 'editcategory';
            document.getElementById('categoryId').value = id;
            document.getElementById('category').value = category;
        }

        function clearModalFields() {
            document.getElementById('categoryId').value = '';
            document.getElementById('category').value = '';
        }
    </script>


    <!-- <div class="modal bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <h4>Overflowing text to show scroll behavior</h4>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div> -->
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>


    <script>
        $(document).ready(function() {
            $('.editbtn').on('click', function() {
                $('#editModal').modal('show');
            })
        });
    </script>



    <script>
        $(document).ready(() => {
            function delBtnFn(e) {
                e.preventDefault()
                e.stopPropagation()
                const logOpts = {
                    title: "Are you sure?",
                    text: "You are about to logout!",
                    dangerMode: true,
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    denyButtonText: 'No',
                }
                // firs()
                //     .then((res) => {})
                //     .catch(() => {})
                //     .always()
                Swal.fire(delOpts)
                    .then((result) => {
                        if (result.value) {
                            window.location = 'delpost.php'
                            // Swal.fire("You confirmed");
                        } else {
                            // Swal.fire("You canceled!");
                        }
                    });
            }
            $('#logout-btn').click(delBtnFn)
            // document.getElementById('logout-btn').addEventListener('click', () => {
            //
            // })
            // document.getElementById('logout-btn').addEventListener('click', function () {
            //
            // })
            // document.getElementById('logout-btn').addEventListener('click', logoutBtnFn)
        })
    </script>



</body>


</html>