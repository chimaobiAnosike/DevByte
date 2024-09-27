<?php include_once('./includes/header.php'); ?>
<?php include_once "./authentication.php"; ?>



<body class="skin-default fixed-layout changepass">

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
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%;">
                        <div class="row">
                            <div class="col-md-12">
                                <?php include "message.php"; ?>
                                <form class="form-horizontal form-material" id="loginform" action="logincode.php" method="post">
                                    <h4 class="text-center font-weight-normal m-b-20">Change Password</h4>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="email" class="form-control-label">Enter your email</label>
                                            <input class="form-control" id="email" name="email" type="email" required="" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="passw" id="passw" class="form-control-label">Enter your old password</label>
                                            <input class="form-control" id="passw" name="opassw" type="password" required="" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="passw" class="form-control-label">Enter your new password</label>
                                            <input class="form-control" id="passw1" name="npassw" type="password" required="" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <div class="col-xs-12 p-b-20">
                                            <button class="btn btn-block btn-lg btn-info btn-rounded" name="changepassbtn" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
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