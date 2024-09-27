<?php

session_start();
include "dbconfig.php";

if (isset($_POST['id'])) {
    $post_id = $_POST['id'];

    // Fetch the filename of the image associated with the post
    $result = $datcon->query("SELECT image FROM post WHERE id = '$post_id'");

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // var_dump($row);
        $old_filename = $row['image'];

        // Delete the post record from the database
        $delete_result = $datcon->query("DELETE FROM post WHERE id = '$post_id'");

        if ($delete_result) {
            // If the post was successfully deleted, delete the image file if it exists
            if (!empty($old_filename) && file_exists('./uploads/post/' . $old_filename)) {
                unlink('./uploads/post/' . $old_filename);
            }

            // Send success response in JSON format
            header('Content-Type: application/json');
            echo json_encode(['success' => true, 'message' => 'Post successfully deleted']);
            exit();
        } else {
            // Send error response in JSON format
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'Something went wrong while trying to delete the post']);
            exit();
        }
    } else {
        // Send error response for post not found
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Post not found']);
        exit();
    }
} else {
    // Send error response if no ID was sent
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Invalid request, ID not set']);
    exit();
}
