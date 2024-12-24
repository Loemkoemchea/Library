<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
    
    include_once('../controller/init.php');

    $user = new user($db);

    $data = json_decode(file_get_contents("php://input"));

    $user->first_Name = $data->first_Name;
    $user->last_Name = $data->last_Name;
    $user->gender = $data->gender;
    $user->book = $data->book;

    // Create the book record
    if ($user->create()) {
        echo json_encode(array('message' => 'user Created'));
    } else {
        echo json_encode(array('message' => 'user Not Created'));
    }
?>