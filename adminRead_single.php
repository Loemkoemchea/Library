<?php
    header('Access-Control-ALlow-Origin:*');
    header('Content-Type: application/json');

    include_once("../controller/init.php");

    $admin = new admin($db);


    $admin->id = isset($_GET['id']) ? $_GET['id']: die();

    $admin->read_single();

    $admin = array(
        'id'=>$book_list->id,
        'first_Name'=>$admin->first_Name,
        'last_Name'=>$admin->last_Name,
        'gender'=> $admin->gender,
        'username'=> $admin->username,
        'password'=> $admin->password,
        'create_at'=>$admin->create_at
    );

    print_r(json_encode($admin_arr));

?>