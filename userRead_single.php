<?php
    header('Access-Control-ALlow-Origin:*');
    header('Content-Type: application/json');

    include_once("../controller/init.php");

    $user = new user($db);


    $user->id = isset($_GET['id']) ? $_GET['id']: die();

    $user->read_single();

    $user = array(
        'id'=>$book_list->id,
        'first_Name'=>$user->first_Name,
        'last_Name'=>$user->last_Name,
        'gender'=> $user->gender,
        'book'=> $user->book,
        'create_at'=>$user->create_at
    );

    print_r(json_encode($user_arr));

?>