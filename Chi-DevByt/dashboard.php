<?php include_once('./includes/header.php'); ?>
<?php include_once "./authentication.php"; ?>



<body class="skin-default fixed-layout">

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <?= include("./includes/topbar.php"); ?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <?php include("./includes/leftnavbar.php"); ?>
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
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">ChimaTech Admin</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard </li>
                            </ol>

                            <button type="button" class="btn  btn-info d-none d-lg-block m-l-15" data-toggle="modal"
                                data-target="#addPost"><i class="fa fa-plus-circle"></i> Create New Post</button>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <?php include "message.php"; ?>
                <div class="card-group mb-5">

                    <div class="card">
                        <div class="card-body">
                            <div class="row gx-5">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <a href="./post-active.php">
                                                <h3><i class="icon-screen-desktop"></i></h3>
                                                <p class="text-muted">ACTIVE POST</p>
                                                <a href="post-active.php"></a>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#">
                                                <h2 class="counter text-primary"><?php
                                                                                    $result = $datcon->query("SELECT * FROM post WHERE `status` = 'publish'");
                                                                                    $count = 0;
                                                                                    while ($unzip = $result->fetch_assoc()) {
                                                                                        $count++;
                                                                                    }
                                                                                    echo $count;

                                                                                    ?></h2> <a href="./view-post.php"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></a>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <a href="./view-category.php">
                                                <h3><i class="icon-note"></i></h3>
                                                <p class="text-muted">CATEGORIES</p>
                                            </a>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-cyan"><?php
                                                                            $result = $datcon->query("SELECT * FROM categories");
                                                                            $count = 0;
                                                                            while ($unzip = $result->fetch_assoc()) {
                                                                                $count++;
                                                                            }
                                                                            echo $count;

                                                                            ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-group ">

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-screen-desktop"></i></h3>
                                            <p class="text-muted">PENDING POST</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-primary"><?php
                                                                                    $result = $datcon->query("SELECT * FROM post WHERE `status` = 'pending'");
                                                                                    $count = 0;
                                                                                    while ($unzip = $result->fetch_assoc()) {
                                                                                        $count++;
                                                                                    }
                                                                                    echo $count;

                                                                                    ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div>
                                            <h3><i class="icon-note"></i></h3>
                                            <p class="text-muted">ALL POST</p>
                                        </div>
                                        <div class="ml-auto">
                                            <h2 class="counter text-cyan"><?php
                                                                            $result = $datcon->query("SELECT * FROM post ");
                                                                            $count = 0;
                                                                            while ($unzip = $result->fetch_assoc()) {
                                                                                $count++;
                                                                            }
                                                                            echo $count;

                                                                            ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Info box -->

        <!-- Comment - table -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Comment - chats -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
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
                        <div class="form-group mt-5 row">
                            <label for="text-input" class="col-2 col-form-label">Title</label>
                            <div class="col-10">
                                <input required class="form-control" type="text" name="name" id="text-input">
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
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 09:57:47 GMT -->

</html>