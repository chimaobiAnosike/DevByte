<?php
include_once "dbconfig.php";
session_start();

$id = $_GET['id'];

$result = $datcon->query(
    "DELETE FROM categories
                WHERE id = $id"
);


if ($result) {
    $_SESSION['message'] = "Category successfully deleted!";
    $_SESSION['type'] = "success";

    header("location: view-category.php");
    exit();
}
