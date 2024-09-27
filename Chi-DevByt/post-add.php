<?php include_once('./includes/header.php'); ?>
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
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div>
                            <img src="assets/images/users/2.jpg" alt="user-img" class="img-circle">
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">Steave Gection
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-wallet"></i> My Balance</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-email"></i> Inbox</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item">
                                    <i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="pages-login.html" class="dropdown-item">
                                    <i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <?php include "./includes/leftnavbar.php"; ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
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
                        <h4 class="text-themecolor">Add Post</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active"> <i class="fa fa-check"></i> Add Post</li>
                            </ol>
                            <button type="button" class="btn  btn-danger d-none d-lg-block m-l-15"><a href="view-post.php" class="text-white">View Post</a></button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <?php include "./message.php"; ?>
                            <div class="card-body">
                                <h4 class="card-title">Add Post</h4>
                                <form class="form" action="posts.php" method="post" enctype="multipart/form-data">

                                    <div class="form-group mt-5 row">
                                        <label for="catid-input" class="col-2 col-form-label">Category List</label>
                                        <div class="col-10">
                                            <select name="categoryid" class="form-control" required id="catid-input">
                                                <option value="">-- Select a Category --</option>
                                                <?php
                                                $result = $datcon->query("SELECT * FROM categories");
                                                while ($unzip = $result->fetch_assoc()) { ?>
                                                    <option value="<?= $unzip['id']; ?>"><?= $unzip['name'] . ' ' . 'category' ?></option>
                                                <?php  }
                                                ?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for=""></label>

                                    </div>

                                    <div class="form-group mt-5 row">
                                        <label for="text-input" class="col-2 col-form-label">Name</label>
                                        <div class="col-10">
                                            <input required class="form-control" type="text" name="name" id="text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="url-input" class="col-2 col-form-label">Slug (URL)</label>
                                        <div class="col-10">
                                            <input required class="form-control" name="slug" type="url" id="url-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-2 col-form-label">Description</label>
                                        <div class="col-10">
                                            <textarea name="description" required class="form-control" id="editor" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="meta-title-input" class="col-2 col-form-label">Meta Title</label>
                                        <div class="col-10">
                                            <input required class="form-control" name="meta_title" type="text" max="191" id="meta-title-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="meta-des-input" class="col-2 col-form-label">Meta Description</label>
                                        <div class="col-10">
                                            <textarea required class="form-control" name="meta_description" type="text" id="meta-des-input" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="meta-keyword-input" class="col-2 col-form-label">Meta keyword</label>
                                        <div class="col-10">
                                            <textarea required class="form-control" name="meta_keyword" type="text" id="meta-keyword-input" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="img-input" class="col-2 col-form-label">Image</label>
                                        <div class="col-10">
                                            <input type="file" name="image" id="img-input" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <button type="submit" name="post_add" class="btn btn-primary">Save Post</button>
                                    </div>
                                </form>


                                <!-- ============================================================== -->
                                <!-- End PAge Content -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- Right sidebar -->
                                <!-- ============================================================== -->
                                <!-- .right-sidebar -->
                                <?php include "./includes/rytnavbar.php"; ?>
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
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
    <?php include "./includes/script.php"; ?>
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/form-float-input.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 09:59:09 GMT -->

</html>