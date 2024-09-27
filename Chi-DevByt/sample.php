<a data-toggle="modal" data-target="#deleteModal" href="delcat.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>

<a href="editcat.php?id=<?= urlencode($row['id']); ?>"
    data-bs-toggle="modal"
    data-bs-target="#editModal"
    onclick="showEditModal('<?= htmlspecialchars($row['id']); ?>', '<?= htmlspecialchars($row['ctitle']); ?>')">Edit</a>











<!-- ########################################## SWEET ALERT FIRE FOR DELETE POST ########################################### -->
<script>
    $(document).ready(() => {
        function deleteBtnFn(e) {
            e.preventDefault()
            e.stopPropagation()
            const delOpts = {
                title: "Are you sure?",
                text: "Do You Really Want To Delete This ?",
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
                        window.location = 'deleleCode.php'
                        // Swal.fire("You confirmed");
                    } else {
                        // Swal.fire("You canceled!");
                    }
                });
        }
        $('#deletebtn').click(deleteBtnFn)
        // document.getElementById('logout-btn').addEventListener('click', () => {
        //
        // })
        // document.getElementById('logout-btn').addEventListener('click', function () {
        //
        // })
        // document.getElementById('logout-btn').addEventListener('click', logoutBtnFn)
    })
</script>

<!-- ########################################################## DPO code ########################################################################## -->



<?php include_once './includes/header.php'; ?>
<?php include_once "./authentication.php"; ?>

<body class="skin-default fixed-layout">
    <style>
        .dave {
            background-color: #04628d !important;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            position: relative;
            animation-name: slideIn;
            animation-duration: 1s;
        }

        @keyframes slideIn {
            from {
                top: -300px;
                opacity: 0;
            }

            to {
                top: 0;
                opacity: 1;
            }
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Add margin between buttons */
        .action-buttons {
            display: flex;
            gap: 10px;
        }
    </style>
    <div id="main-wrapper">
        <?php include "./includes/topbar.php"; ?>
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
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="javascript:void(0)" type="button" class="btn btn-success dave d-none d-lg-block m-l-15" id="add-category-btn">
                                <i class="fa fa-plus-circle"></i> Add Category
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Category</h3>
                            </div>
                            <div class="card-body">
                                <?php
                                // session_start();
                                if (isset($_SESSION['category-success'])) {
                                    echo "<div class='alert alert-success'>{$_SESSION['category-success']}</div>";
                                    unset($_SESSION['category-success']);
                                }

                                if (isset($_SESSION['category-error'])) {
                                    echo "<div class='alert alert-danger'>{$_SESSION['category-error']}</div>";
                                    unset($_SESSION['category-error']);
                                }
                                ?>
                                <div class="table-responsive">
                                    <table id="mainTable" class="table table-hover m-b-0">
                                        <thead>
                                            <tr>
                                                <th>Category</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $result = $datcon->query("SELECT * FROM categories");
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<tr>';
                                                echo '<td>' . $row['ctitle'] . '</td>';
                                                echo '<td>';
                                                echo '<div class="action-buttons">';
                                                echo '<button type="button" name="category_edit" class="btn btn-success dave edit-btn sm" data-id="' . $row['id'] . '" data-category="' . $row['ctitle'] . '"> Edit</button>';
                                                echo '<button class="btn btn-danger btn-sm delete-btn sm" data-id="' . $row['id'] . '" data-category="' . $row['ctitle'] . '">Delete</button>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dynamic Modal -->
                <div id="categoryModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="categoryModalLabel">Add Category</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal form-material" id="categoryForm" action="category-process.php" method="POST">
                                    <input type="hidden" name="id" id="categoryId">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input class="form-control" id="categoryName" name="category" type="text" placeholder="Category" required>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <div class="col-xs-12 p-b-20">
                                            <button class="btn btn-block btn-lg btn-success dave btn-rounded" type="submit" name="submit" id="modalSubmitButton">Add Category</button>
                                        </div>
                                    </div>
                                </form>
                                <form class="form-horizontal form-material" id="deleteCategoryForm" action="delete-category.php" method="POST" style="display: none;">
                                    <input type="hidden" name="id" id="deleteCategoryId">
                                    <div class="form-group">
                                        <p id="deleteCategoryMessage">Are you sure you want to delete this category?</p>
                                    </div>
                                    <div class="form-group text-center">
                                        <div class="col-xs-12 p-b-20">
                                            <button class="btn btn-block btn-lg btn-danger btn-rounded" type="submit" name="submit">Delete</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include "./includes/rytnavbar.php"; ?>
            </div>
        </div>
        <?php include "./includes/footer.php"; ?>
    </div>
    </div>
    </div>
    </div>
    <?php include "./includes/script.php"; ?>
    <script>
        $(document).ready(function() {
            // Add button click
            $('#add-category-btn').on('click', function() {
                $('#categoryModalLabel').text('Add Category');
                $('#categoryForm').attr('action', 'category-process.php').show();
                $('#deleteCategoryForm').hide();
                $('#categoryId').val('');
                $('#categoryName').val('');
                $('#modalSubmitButton').text('Add Category').removeClass('btn-danger').addClass('btn-success');
                $('#categoryModal').fadeIn();
            });

            // Edit button click
            $('.edit-btn').on('click', function() {
                var id = $(this).data('id');
                var category = $(this).data('category');
                $('#categoryModalLabel').text('Edit Category');
                $('#categoryForm').attr('action', 'cat.php').show();
                $('#deleteCategoryForm').hide();
                $('#categoryId').val(id);
                $('#categoryName').val(category);
                $('#modalSubmitButton').text('Save Changes').removeClass('btn-danger').addClass('btn-success');
                $('#categoryModal').fadeIn();
            });

            // Delete button click
            $('.delete-btn').on('click', function() {
                var id = $(this).data('id');
                var category = $(this).data('category');
                $('#categoryModalLabel').text('Delete Category');
                $('#categoryForm').hide();
                $('#deleteCategoryForm').show();
                $('#deleteCategoryId').val(id);
                $('#deleteCategoryMessage').text('Are you sure you want to delete the category "' + category + '"?');
                $('#categoryModal').fadeIn();
            });

            // Close modal when clicking on the close button
            $('.close').on('click', function() {
                $('#categoryModal').fadeOut();
            });

            // Close modal when clicking outside the modal content
            $(window).on('click', function(event) {
                if ($(event.target).hasClass('modal')) {
                    $('#categoryModal').fadeOut();
                }
            });
        });
    </script>
</body>

</html>