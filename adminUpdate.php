<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
    
    include_once('../controller/init.php');

    $admin = new admin($db);

    $data = json_decode(file_get_contents("php://input"));

    $admin->id = $data->id;
    $admin->first_Name = $data->first_Name;
    $admin->last_Name = $data->last_Name;
    $admin->gender = $data->gender;
    $admin->username = $data->username;
    $admin->password = $data->password;

    // Create the book record
    if ($admin->update()) {
        echo json_encode(array('message' => 'admin updated'));
    } else {
        echo json_encode(array('message' => 'admin Not update'));
    }
?>