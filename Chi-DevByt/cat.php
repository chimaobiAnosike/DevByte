<?php

global $datcon;
include "dbconfig.php";
session_start();





/*************************    ************************************/
// Enable error reporting for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);



// Check if 'category_del' is set in POST request
if (isset($_POST['category_del'])) {
    // Check if 'id' is provided
    if (!isset($_POST['id']) || empty($_POST['id'])) {
        echo json_encode(['success' => false, 'message' => 'No item ID provided']);
        exit;
    }

    $id = intval($_POST['id']); // Convert to integer to ensure it's a valid ID

    // Validate item_id (ensure it's a positive integer)
    if ($id <= 0) {
        echo json_encode(['success' => false, 'message' => 'Invalid item ID']);
        exit;
    }

    if ($stmt->execute()) {
        $_SESSION['message'] = "Category Successfully Deleted";
        $_SESSION['message_type'] = "success";
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to delete category']);
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

}
else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}

    


/*************************    ************************************/
// if (isset($_POST['category_del'])) {
//     $id = $_POST['id'];

//     $result = $datcon->query("DELETE FROM categories WHERE id = '$id'");
//     if ($result) {
//         $_SESSION['message'] = "Category Succesfully Deleted";
//         $_SESSION['message_type'] = "success";
//         header("location: view-category.php");
//     }
// }





if (isset($_POST['changepassbtn'])) {
    $email = $_POST['email'];
    $oldpass = $_POST['opassw'];
    $newpass = $_POST['npassw'];
}


if (isset($_POST['edit-postbtn'])) {
    $post_id = $_POST['id'];
    $cat_id = $_POST['categoryid'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    $old_filename = $_POST['old_filename'];
    $image = $_FILES['image']['name'];

    $update_filename = "";

    if ($image != null) {
        //rename image
        $image_extension = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . $image_extension;
        $update_filename = $filename;
    } else {
        $update_filename = $old_filename;
    }


    $result = $datcon->query("UPDATE post 
                                            SET 
                                         categoryid = '$cat_id',
                                         name = '$name',
                                         slug = '$slug',
                                         description = '$description',
                                         image= '$update_filename',
                                         meta_title= '$meta_title',
                                         meta_description = '$meta_description',
                                         meta_keywoard= '$meta_keyword' WHERE id = '$post_id'");

    if ($result) {
        $_SESSION['message'] = "Post Successfully Editted";
        $_SESSION['type'] = 'success';
        header("location: post-edit.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Something Went Wrong!";
        $_SESSION['type'] = 'danger';
        header("location: post-edit.php");
        exit(0);
    }
} else {
    echo "An error Occurred!";
}



if (isset($_POST['category_add'])) {


    $title = $_POST['ctitle'];


    $result = $datcon->query(
        "INSERT INTO categories 
            SET 
                ctitle ='$title'
            "
    );
    if ($result) {
        $_SESSION['message'] = "Category Successfully Added";
        $_SESSION['message_type'] = 'success';
        header("location: view-category.php");
    } else {
        $_SESSION['message'] = "Something Went Wrong!";
        $_SESSION['message_type'] = 'info';
        header("location: view-category.php");
        exit(0);
    }
}


if (isset($_POST['category_edit'])) {
    $id = $_POST['id'];
    $title = $_POST['ctitle'];
    $result = $datcon->query(
        "UPDATE categories 
            SET 
                ctitle='$title'
                WHERE
                id = '$id'"
    );
    if ($result) {
        $_SESSION['message'] = "Category Successfully Editted";
        $_SESSION['message_type'] = 'success';
        header("location: view-category.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Something Went Wrong!";
        $_SESSION['message_type'] = 'danger';
        header("location: view-category.php");
        exit(0);
    }
}
