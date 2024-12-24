<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
    
    include_once('../controller/init.php');

    $admin = new admin($db);

    $data = json_decode(file_get_contents("php://input"));

    $admin->username = $data->username;
    $admin->password = $data->password;

    if ($admin->login()) {
        echo json_encode(array(
            'message' => 'Login Successful',
            'user' => array(
                'id' => $admin->id,
                'first_Name' => $admin->first_Name,
                'last_Name' => $admin->last_Name
            )
        ));
    } else {
        echo json_encode(array('message' => 'Login Failed'));
    }
?>
