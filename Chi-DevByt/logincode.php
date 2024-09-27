<?php
include "dbconfig.php";
session_start();


if (isset($_POST['changepassbtn'])) {
    $email = $_POST['email'];
    $oldpass = $_POST['opassw'];
    $newpass = md5($_POST['npassw']);

    $result = $datcon->query("SELECT * FROM users WHERE email='$email' AND passw='$oldpass'");

    if ($result->num_rows > 0) {
        $result2 = $datcon->query("UPDATE users SET passw='$newpass' WHERE email='$email'");
        $_SESSION['message'] = "Password Changed";
        $_SESSION['message_type'] = "success";
        $_SESSION['notoast'] = True;
        header("location: dashboard.php");
        exit();
    } else {
        $_SESSION['message'] = "Wrong password";
        $_SESSION['message_type'] = 'info';
        header("location: changepass.php");
        exit();
    }
}

if (isset($_POST['loginbtn'])) {
    $email = mysqli_real_escape_string($datcon, $_POST['email']);
    $passw = md5(mysqli_real_escape_string($datcon, $_POST['passw']));

    $result = $datcon->query("SELECT * FROM users WHERE email ='$email' AND passw='$passw'");


    if ($result->num_rows > 0) {
        $_SESSION['auth'] = true;
        $_SESSION['message'] = 'Logged In Succesfully';
        $_SESSION['message_type'] = "success";
        header("location: dashboard.php");
    } else {
        $_SESSION['message'] = "Incorrect Username or Password";
        $_SESSION['message_type'] = "danger";
        header("location: pages-login.php");
        exit(0);
    }
} else {
    $_SESSION['message'] = "You need to login";
    $_SESSION['message_type'] =  'warning';
    header("location:pages-login.php");
}

