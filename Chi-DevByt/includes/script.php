<script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/node_modules/popper/popper.min.js"></script>
<script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="assets/node_modules/raphael/raphael-min.js"></script>
<script src="assets/node_modules/morrisjs/morris.min.js"></script>
<script src="assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Flot Charts JavaScript -->
<script src="assets/node_modules/flot/excanvas.js"></script>
<script src="assets/node_modules/flot/jquery.flot.js"></script>
<script src="assets/node_modules/flot/jquery.flot.pie.js"></script>
<script src="assets/node_modules/flot/jquery.flot.time.js"></script>
<script src="assets/node_modules/flot/jquery.flot.stack.js"></script>
<script src="assets/node_modules/flot/jquery.flot.crosshair.js"></script>
<script src="assets/node_modules/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="dist/js/pages/flot-data.js"></script>

<script src="assets/node_modules/raphael/raphael-min.js"></script>
<script src="assets/node_modules/morrisjs/morris.min.js"></script>
<script src="assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Popup message jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/node_modules/toast-master/js/jquery.toast.js"></script>
<script src="assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<!-- Chart JS -->
<!-- <script src="dist/js/dashboard1.js"></script> -->
<script src="assets/node_modules/toast-master/js/jquery.toast.js"></script>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- <script>
        CKEDITOR.replace('editor');
    </script> -->


<?php if (isset($myAppMessage) && isset($myAppMessageType) && !isset($noToast)) {
    switch ($myAppMessageType) {
        case 'success':
            $bgColor = '#00b000';
            $textColor = '#ffffff';
            break;
        case 'warning':
            $bgColor = 'yellow';
            $textColor = '#000000';
            break;
        default:
            $bgColor = 'red';
            $textColor = '#ffffff';
    }
?>
    <script>
        $(document).ready(() => {
            Swal.fire({
                text: "<?php echo $myAppMessage; ?>",
                timer: 3000,

            });

            $.toast({
                heading: 'ALERT',
                text: '<?php echo $myAppMessage; ?>',
                position: 'top-right',
                icon: 'info',
                hideAfter: 3000,
                stack: 6,
                bgColor: '<?php echo $bgColor; ?>',
                textColor: '<?php echo  $textColor; ?>'
            });
        })
    </script>
<?php } ?>
<script>
    $(document).ready(() => {
        function logoutBtnFn(e) {
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
            Swal.fire(logOpts)
                .then((result) => {
                    if (result.value) {
                        window.location = 'logout.php'
                        // Swal.fire("You confirmed");
                    } else {
                        // Swal.fire("You canceled!");
                    }
                });
        }
        $('#logout-btn').click(logoutBtnFn)
        // document.getElementById('logout-btn').addEventListener('click', () => {
        //
        // })
        // document.getElementById('logout-btn').addEventListener('click', function () {
        //
        // })
        // document.getElementById('logout-btn').addEventListener('click', logoutBtnFn)
    })
</script>
<!-- <script>
    $(document).ready(function() {
        $('#deleteMe').on('click', function() {
            var id = $(this).data('id');

            // Show SweetAlert confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send AJAX request to delete the item
                    $.ajax({
                        url: 'delete.php',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function(response) {
                            // Handle the response from the PHP script
                            if (response.success) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your item has been deleted.',
                                    'success'
                                );
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'There was a problem deleting your item.',
                                    'error'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'There was a problem with the AJAX request.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
</script> -->

<script>
    $('.category_del').on('click', function(e) {
        e.preventDefault(); //prevent the default action

        //retrieve the information stored in the data-*

        const url = $(this).data('url');
        const categoryId = $(this).data('categoryid');
        const row = $(this).closest('tr');

        // console.log('URL:', url); // Check the URL
        // console.log('Category ID:', categoryId); // Check the ID

        //when the button is clicked, show a dialog

        Swal.fire({
            type: 'warning',
            title: 'Are You Sure You Want To Delete?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete It!',
        }).then((result) => {
            if (result.value) {
                //Send an Ajax post Request to the PHP Script
                $.ajax({
                    url: url, //
                    type: 'POST', //Use post to send the data
                    data: {
                        id: categoryId
                    }, //Data to be sent in the data property of the object.
                    success: function(response) {
                        //handle the response from the Php Script
                        const data = JSON.parse(response); //parse the json response
                        if (data.success) {
                            Swal.fire({
                                type: 'success',
                                title: 'Deleted!',
                                text: 'Deleted From Database successfully'
                            }).then(() => {
                                // $(this).closest('tr').remove(); this is only needed when i need to remove a row from the table
                                row.remove(); // remove the table row

                                //update the rows to reflect the current order of number

                                $('table tbody tr').each(function(index) {
                                    $(this).find('td:first').text(index + 1);
                                });
                            });
                        } else {
                            Swal.fire({
                                type: 'error',
                                title: 'Error',
                                text: data.message //display error message
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        //handle any errors during the ajax request
                        Swal.fire({
                            type: 'error',
                            title: 'Error',
                            text: 'Something went wrong. Please try again.'
                        });
                    }
                });
            }
        });
    });
</script>

<script>
    $('.stat-btn').on('click', function(e) {
        e.preventDefault();

        const button = $(this); // The clicked button
        const url = button.data('url');
        const statusid = button.data('statusid');
        let currentStatus = button.data('status'); // Get current status from the button

        // Set the button's new name based on the current status
        let btnname = currentStatus === 'publish' ? 'unpublish' : 'publish';

        Swal.fire({
            title: `Are You Sure You Want To ${btnname}?`,
            text: `This Post will ${btnname === 'unpublish' ? 'not ' : ''}be seen by users!`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: `Yes, ${btnname} It!`,
            cancelButtonColor: '#d33',
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        statusid: statusid,
                        status: currentStatus // Send the current status of the button
                    },
                    success: (response) => {
                        console.log(response); // Log the response from the server

                        try {
                            const data = typeof response === "string" ? JSON.parse(response) : response;

                            if (data.success) {
                                // Determine new status based on current status
                                let newStatus = currentStatus === 'publish' ? 'unpublish' : 'publish';
                                const isPublished = newStatus === 'publish'

                                // Update button text based on new status
                                let newBtnname = newStatus === 'publish' ? 'unpublish' : 'publish';
                                button.text(newBtnname);

                                // Update button color based on new status
                                if (newStatus === 'publish') {
                                    button.removeClass('btn-success').addClass('btn-warning');
                                } else {
                                    button.removeClass('btn-warning').addClass('btn-success');
                                }

                                // Update button's data-status attribute to reflect the new status
                                button.attr('data-status', newStatus);

                                // Update the status text in the row (update the relevant <td>)
                                const row = $(`tr[data-row-id="${statusid}"]`);
                                const statusTd = row.find('td:nth-child(5)'); // Assuming status is in the 5th <td>
                                statusTd.text(newStatus); // Update the status text

                                // Immediately update the currentStatus variable to prevent future errors
                                currentStatus = newStatus;

                                // location.reload(true);

                                Swal.fire({
                                    type: 'success',
                                    title: 'Updated',
                                    text: 'Status Updated',
                                    timer: 3000
                                }).then(() => {
                                    location.reload(true);
                                });



                                // location.reload(true);
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: data.message
                                });
                            }
                        } catch (error) {
                            console.error('JSON Parsing Error:', error, response);
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Invalid server response.'
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Something went wrong. Please try again.'
                        });
                    }
                });
            }
        });
    });
</script>
<script>
    $('.post-del').on('click', function(e) {
        e.preventDefault();

        const button = $(this);
        const url = button.data('url');
        const id = button.data('id');

        // Call SweetAlert 
        Swal.fire({
            title: `Are You Sure You Want To Delete?`,
            text: `This Action Cannot Be Reverted!`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: `Yes, Delete It!`,
            cancelButtonColor: '#d33',
        }).then((result) => {
            console.log(result); //log result from server;
            if (result.isConfirmed || result.value) {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        id: id
                    },
                    error: () => {
                        console.log('Hi this is error');
                    },
                    success: (response) => {
                        try {
                            console.log('Helo U');
                            const data = typeof response === "string" ? JSON.parse(response) : response;

                            if (data.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Deleted!',
                                    text: 'Deleted from the database successfully'
                                }).then(() => {
                                    // Redirect to view-post.php after successful deletion
                                    window.location = 'view-post.php';
                                    // window.location.href = "view-post.php";
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'ERROR',
                                    text: data.message
                                });
                            }
                        } catch (error) {
                            console.error('JSON Parsing Error:', error, response);
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Invalid server response.'
                            });
                        }
                    }
                });
            }
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var progressValue = 50; // Example value; you can replace this with your dynamic value
        var progressBar = document.getElementById('dynamic-progress-bar');
        progressBar.style.width = progressValue + '%';
        progressBar.setAttribute('aria-valuenow', progressValue);
    });
</script>