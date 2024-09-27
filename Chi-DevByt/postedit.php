<?php

include "dbconfig.php";

if (isset($_POST['edit-postbtn'])) {
    $post_id = $_POST['id'];
    $category = $_POST['category'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $old_filename = $_POST['old_filename'];
    $image = $_FILES['image']['name'];

    $update_filename = "";
    $sqlName = $datcon->real_escape_string($name);
    $sqlDesc = $datcon->real_escape_string($description);
    $isValid = $image != null && !empty($image);

    if ($isValid) {
        // Rename image
        $image_extension = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_extension;
        $update_filename = $filename;

        // Delete the old image if it exists
        if (!empty($old_filename) && file_exists('./uploads/post/' . $old_filename)) {
            unlink('./uploads/post/' . $old_filename);
        }

        // Move the new image to the server
        if (move_uploaded_file($_FILES['image']['tmp_name'], './uploads/post/' . $update_filename)) {
            // Proceed with updating the database
            $result = $datcon->query("UPDATE post
                SET
                    category = '$category',
                    name = '$sqlName',
                    description = '$sqlDesc',
                    image = '$update_filename'
                WHERE id = '$post_id'");
        } else {
            $_SESSION['message'] = "Failed to upload new image.";
            $_SESSION['type'] = 'danger';
            header("location: view-post.php");
            exit(0);
        }
    } else {
        // No new image provided, just update other fields
        $result = $datcon->query("UPDATE post
            SET
                category = '$category',
                name = '$sqlName',
                description = '$sqlDesc'
            WHERE id = '$post_id'");
    }

    if ($result) {
        $_SESSION['message'] = "Post Successfully Edited";
        $_SESSION['type'] = 'success';
        header("location: view-post.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Something Went Wrong!";
        $_SESSION['type'] = 'danger';
        header("location: view-post.php");
        exit(0);
    }
} else {
    echo "An error Occurred!";
    exit();
}
