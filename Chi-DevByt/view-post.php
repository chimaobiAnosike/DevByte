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

                            <button type="button" class="btn  btn-info d-none d-lg-block m-l-15" data-toggle="modal"
                                data-target="#addPost"><i class="fa fa-plus-circle"></i> Create Post</button>
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
                                <h6 class="card-title">Post</h6>
                                <div class="table-responsive table-striped table-hover">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th class="text-nowrap">...</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $result = $datcon->query('SELECT * FROM post WHERE `status` = "publish" ORDER BY `created_at` DESC');
                                            if ($result->num_rows > 0) {
                                                $count = 0;
                                                while ($unzip = $result->fetch_assoc()) {
                                                    $count++;

                                            ?>

                                                    <tr data-row-id="<?= $unzip['id'] ?>">
                                                        <td><?= $count ?></td>
                                                        <td><img src="./uploads/post/<?= $unzip['image'] ?>" width="50px"
                                                                height="50px"></td>
                                                        <td><?= $unzip['name'] ?></td>
                                                        <td><?= $unzip['category'] ?></td>
                                                        <td><?= $unzip['status']
                                                            ?></td>
                                                        <td>
                                                            <button id="status-btn-<?= $unzip['id'] ?>"
                                                                data-statusid="<?= $unzip['id'] ?>"
                                                                data-status="<?= $unzip['status'] ?>"
                                                                data-btnname="<?= $unzip['status'] === 'pending' || $unzip['status'] === 'unpublish' ? 'publish' : 'unpublish' ?>"
                                                                data-url="post-pub.php"
                                                                class="stat-btn btn btn-<?= ($unzip['status'] === 'pending' || $unzip['status'] === 'unpublish') ? 'success' : 'warning' ?>">
                                                                <?= $unzip['status'] === 'pending' || $unzip['status'] === 'unpublish' ? 'publish' : 'unpublish' ?>
                                                            </button>

                                                            <a href="post-details.php?id=<?= $unzip['id'] ?>"
                                                                class="btn btn-info">Details</a>
                                                        </td>
                                                    </tr>



                                            <?php
                                                }
                                            };
                                            ?>
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



    <div id="addPost" class="modal bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Add Post</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form class="form" action="posts.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group mt-5 row">
                            <label for="text-input" class="col-2 col-form-label">Title</label>
                            <div class="col-10">
                                <input required class="form-control" type="text" name="name" id="text-input">
                            </div>
                        </div>


                        <div class="form-group mt-3 row">
                            <label for="catid-input" class="col-2 col-form-label">Category List</label>
                            <div class="col-10">
                                <select name="category" class="form-control" required id="catid-input">
                                    <option value="">-- Select a Category --</option>
                                    <?php
                                    $result = $datcon->query("SELECT * FROM categories");
                                    while ($unzip = $result->fetch_assoc()) { ?>
                                        <option value="<?= $unzip['ctitle']; ?>"><?= $unzip['ctitle'] . ' ' . 'category' ?>
                                        </option>
                                    <?php }
                                    ?>
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-2 col-form-label">Description</label>
                            <div class="col-10">
                                <textarea name="description" class="form-control" id="editor" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="img-input" class="col-2 col-form-label">Image</label>
                            <div class="col-10">
                                <input type="file" name="image" id="img-input" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="post_add" class="btn btn-info waves-effect waves-light">Save
                            changes</button>
                        <button type="button" class="btn btn-danger waves-effect text-left"
                            data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>

    </div>
    <!-- /.modal -->





</body>


</html>