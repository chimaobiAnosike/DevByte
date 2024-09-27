<?php

include "dbconfig.php";

//Get the ID from the Ajax  request (POST data)

$id = $_POST['id'];

//prepare the delete SQL Statement
$sql = "DELETE FROM categories WHERE id = ?";
$stmt = $datcon ->prepare($sql);

if(!$stmt){
    //send a json response with an error message
    echo json_encode(['success' => false, 'message' => 'Prepare failed: '.$datcon->error]);
    exit();
}

//bind the parameter(record ID) to the SQL statement 
$stmt->bind_param("i",$id); // "i" indicates an integer type

//Execute the Statement
if($stmt->execute()){
    //Send a Json response indicating success
    echo json_encode(['success' => true, 'message' => 'Record deleted successfully']);
}
else{
    //Send a Json response with an error message
    echo json_encode(['success' => false, 'message' => 'Error deleting This'.$stmt->error]);
}
//close the statement and connection

$stmt->close();
$datcon->close();

