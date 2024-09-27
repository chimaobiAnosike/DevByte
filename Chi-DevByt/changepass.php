<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 09:57:48 GMT -->
<?php include "includes/header.php"; ?>


<body class="skin-default card-no-border">


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">

        <?= include("./includes/topbar.php"); ?>
        <?php include("./includes/leftnavbar.php"); ?>
        <div class="login-register" style="background-image:url(assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <?php include "message.php"; ?>
                    <form class="form-horizontal form-material" id="loginform" action="logincode.php" method="post">
                        <h4 class="text-center font-weight-normal m-b-20">Change Password</h4>
                        <div class="form-group ">
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
    </section>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>

</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/inverse/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Dec 2020 09:57:48 GMT -->

</html>