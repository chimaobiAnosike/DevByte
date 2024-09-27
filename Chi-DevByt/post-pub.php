<?php

header('Content-Type: application/json'); // Ensure we are sending JSON
include "dbconfig.php";

if (isset($_POST['status'])) {
    $statid = $_POST['statusid'];
    $status = $_POST['status'];

    // If current status is 'pending' or 'unpublish', change to 'publish'
    if ($status === 'pending' || $status === 'unpublish') {
        $result = $datcon->query("UPDATE post SET `status` = 'publish' WHERE id = '$statid'");
    }
    // If current status is 'publish', change to 'unpublish'
    elseif ($status === 'publish') {
        $result = $datcon->query("UPDATE post SET `status` = 'unpublish' WHERE id = '$statid'");
    }

    // Return success or failure as a JSON response
    echo json_encode(['success' => $result ? true : false]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
}
