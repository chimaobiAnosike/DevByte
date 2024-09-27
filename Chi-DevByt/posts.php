<?php

session_start();
include "./dbconfig.php";





if (isset($_POST['post-delete'])) {
    $post_id = $_POST['post-id'];

    $result = $datcon->query("DELETE FROM post WHERE id = '$post_id'");
    if ($result) {
        $_SESSION['message'] = "Post Successfully Deleted";
        $_SESSION['message_type'] = 'success';
        header("location: view-post.php");
        echo "I can see this ";
        exit(0);
    }
}

if (isset($_POST['post_add'])) {

    $catid = $_POST['category'];
    $name = $_POST['name'];
    $description = mysqli_real_escape_string($datcon, html_entity_decode($_POST['description']));
    $image = $_FILES['image']['name'];
    //$nav_status = $_POST['nav_status'] == true ? '1' : '0';
    //RENAMING FILE
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_extension;

    if ($_FILES['image']['error'] === 0) {
        $result = $datcon->query(
            "INSERT INTO post
                        SET
                            category = '$catid',
                            name = '$name',
                            description = '$description',
                            image= '$filename'
                            "
        );
        if ($result) {
            move_uploaded_file($_FILES['image']['tmp_name'], './uploads/post/' . $filename);
            $_SESSION['message'] = "Post Successfully Added";
            $_SESSION['message_type'] = 'success';
            header("location: view-post.php");
            exit(0);
        } else {
            $_SESSION['message'] = "Something Went Wrong!";
            $_SESSION['message_type'] = 'danger';
            header("location: view-post.php");
            exit(0);
        }
    }
}
