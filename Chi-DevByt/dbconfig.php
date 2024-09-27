<?php
$host = "localhost";
$user = "root";
$password = "";
$name = "chidev";

// function redirectTo($url)
// {
//     header("location: $url");
//     // exit;
// }

// try {
$datcon = new mysqli($host, $user, $password, $name);
// } catch (\Exception $e) {
//     file_put_contents('./error.txt', json_encode($e->getTrace()) . "\n\n", FILE_APPEND);
//     // redirectTo('errorpage.php');

//     header("location: 'errorpage.php");
//     file_put_contents('./error.txt', 'After redirect' . "\n\n", FILE_APPEND);
// }
