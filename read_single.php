<?php
    header('Access-Control-ALlow-Origin:*');
    header('Content-Type: application/json');

    include_once("../controller/init.php");

    $book_list = new Product($db);
    $users = new user($db);


    $book_list->id = isset($_GET['id']) ? $_GET['id']: die();
    $users->id = isset($_GET['id']) ? $_GET['id']: die();

    $book_list->read_single();

    $book_list_arr = array(
        'id'=>$book_list->id,
        'name'=>$book_list->name,
        'author'=>$book_list->author,
        'aboutBook'=> $book_list->aboutBook,
        'admin'=>$book_list->admin,
        'source_file'=>$book_list->source_file,
        'image_path'=>$book_list->image_path,
        'create_at'=>$book_list->create_at
    );
    
    print_r(json_encode($book_list_arr));

    //users table

    // $users->read_single();

    // $users = array(
    //     'id'=>$book_list->id,
    //     'first_Name'=>$users->first_Name,
    //     'last_Name'=>$users->last_Name,
    //     'gender'=> $users->gender,
    //     'book'=>$users->book,
    //     'create_at'=>$book_list->create_at
    // );
    
    // print_r(json_encode($users_arr));

?>