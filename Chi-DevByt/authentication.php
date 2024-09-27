<?php
//check if the user is logged in?
if (!isset($_SESSION['auth'])) {
    $_SESSION['message'] = 'You Need To Log In';
    $_SESSION['type'] = 'warning';
    header("location: pages-login.php");
    exit(0);
}
