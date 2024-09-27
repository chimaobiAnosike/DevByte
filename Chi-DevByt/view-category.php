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
                            <button type="button" class="btn  btn-info d-none d-lg-block m-l-15"><a
                                    href="#category-add.php" data-toggle="modal" data-target="#responsive-modal1"
                                    class="text-white"><i class="fa fa-plus-circle"></i> Create Category</a></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php include_once "./message.php"; ?>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <div class="row"></div>
                                <h4 class="card-subtitle">Categories</h4>
                                <div class="table-responsive table-striped table-hover">
                                    <table class="table table-striped table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $result = $datcon->query("SELECT * FROM categories");
                                            if ($result->num_rows > 0) {
                                                $count = 0;
                                                // $rows = $result->fetch_all(MYSQLI_ASSOC);
                                                while ($row = $result->fetch_assoc()) {
                                                    //foreach ($rows as $key => $row) { // = $result->fetch_assoc()) {
                                                    // $row = $rows[$key];
                                                    // $count = $key + 1;
                                                    $count++;
                                            ?>
                                                    <tr data-row-id="<?= $row['id'] ?>">
                                                        <td><?= $count ?></td>
                                                        <td>
                                                            <?= $row['ctitle']; ?>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-danger category_del" id="del-cat"
                                                                data-categoryId="<?php echo $row['id'] ?>" data-url="delete.php">Delete
                                                                Category
                                                            </button>
                                                            <button type="button" class="btn btn-info" data-toggle="modal"
                                                                data-target="#editModal<?php echo $row['id'] ?>">
                                                                Edit
                                                            </button>
                                                        </td>


                                                        <div id="deleteModal<?php echo $row['id'] ?>"
                                                            class="modal bs-example-modal-lg" tabindex="-1" role="dialog"
                                                            aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                                            style="display: none;">
                                                            <div class="modal-dialog ">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myLargeModalLabel">Delete
                                                                            Category</h4>
                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                            aria-hidden="true">×</button>
                                                                    </div>
                                                                    <form action="cat.php" method="post">
                                                                        <div class="modal-body">

                                                                            <div class="form-group">
                                                                                <h4 text-center>Are You Sure You Want To Delete?
                                                                                </h4>
                                                                                <input type="hidden" name="id"
                                                                                    value="<?= $row['id']; ?>">

                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-default waves-effect"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="button" id="categoryModalActionButton" data-item-id="123" class="btn btn-danger waves-effect waves-light">Delete</button>


                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>

                                                        <div id="editModal<?php echo $row['id'] ?>"
                                                            class="modal bs-example-modal-lg" tabindex="-1" role="dialog"
                                                            aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                                            style="display: none;">
                                                            <div class="modal-dialog ">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myLargeModalLabel">Edit
                                                                            Category</h4>
                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                            aria-hidden="true">×</button>
                                                                    </div>
                                                                    <form action="cat.php" method="post">
                                                                        <div class="modal-body">

                                                                            <div class="form-group">
                                                                                <label for="ctitle"
                                                                                    class="form-label">Title:</label>
                                                                                <input type="text" name="ctitle"
                                                                                    value="<?= $row['ctitle']; ?>"
                                                                                    class="form-control" id="catagory">
                                                                                <input type="hidden" name="id"
                                                                                    value="<?= $row['id']; ?>">

                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-default waves-effect"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="submit" id="categoryModalActionButton"
                                                                                name="category_edit"
                                                                                class="btn btn-danger waves-effect waves-light">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>





                                                    </tr>
                                            <?php
                                                }
                                            } ?>

                                        </tbody>
                                    </table>
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

</body>


</html>