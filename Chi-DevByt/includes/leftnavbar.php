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
                        aria-expanded="false">Chimaobi Anosike
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
                        <a href="logout.php" class="dropdown-item">
                            <i class="fa fa-power-off"></i> Logout</a>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap"></li>


                <li>
                    <a class="waves-effect waves-dark" href="dashboard.php" aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="view-category.php" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Manage Categories</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="ti-layout-grid2"></i>
                        <span class="hide-menu">Manage Posts
                            <span class="badge badge-pill badge-cyan ml-auto"></span>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="view-post.php">Active Post </a>
                        </li>
                        <li>
                            <a href="post-unpub.php">Create/Draft</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="changepassword.php" aria-expanded="false">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        <span class="hide-menu">Change Password</span>
                    </a>
                </li>
                <li>

                    <a class="waves-effect waves-dark" data-bs-toggle="modal" data-bs-target="#logoutModal" aria-expanded="false" id="logout-btn">
                        <i class='bx bx-log-out'></i>
                        <span class="hide-menu">Log Out</span>
                    </a>

                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>