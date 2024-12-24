<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods,Authorization, X-Requested-With');

include_once('../controller/init.php');
$book_list = new Product($db);

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->id)) {
    $book_list->id = $data->id;

    $currentData = $book_list->getById($book_list->id);

    $book_list->name = !empty($data->name) ? $data->name : $currentData->name;
    $book_list->author = !empty($data->author) ? $data->author : $currentData->author;
    $book_list->aboutBook = !empty($data->aboutBook) ? $data->aboutBook : $currentData->aboutBook;
    $book_list->admin = !empty($data->admin) ? $data->admin : $currentData->admin;

    if (isset($_FILES['bookImage']) && $_FILES['bookImage']['error'] == 0) {
        $imageName = $_FILES['bookImage']['name']; 
        $imageTmp = $_FILES['bookImage']['tmp_name']; 
        $imagePath = "../image/" . basename($imageName);

        if (move_uploaded_file($imageTmp, $imagePath)) {
            $book_list->image_path = $imagePath;
        } else {
            echo json_encode(array('message' => 'Image upload failed'));
            exit;
        }
}
    $book_list->image_path = !empty($data->image_path) ? $data->image_path : $currentData->image_path;

    $book_list->source_file = !empty($data->source_file) ? $data->source_file : $currentData->source_file;

    if($book_list->image_path === null || $book_list->source_file === null) {
        $book_list->image_path = !empty($data->image_path) ? $data->image_path : $currentData->image_path;
        $book_list->source_file = !empty($data->source_file) ? $data->source_file : $currentData->source_file;

    }
    

    if ($book_list->update()) {
        echo json_encode(array('message' => 'Product Updated'));
    } else {
        echo json_encode(array('message' => 'Product Not Updated'));
    }
} else {
    echo json_encode(array('message' => 'No ID provided'));
}

?>
