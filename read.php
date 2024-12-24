<?php
    header('Access-Control-ALlow-Origin:*');
    header('Content-Type: application/json');

    include_once("../controller/init.php");

    $book_list = new Product($db);
    $result = $book_list->read();
    $num = $result->rowCount();
    if($num>0){
        $book_list_arr = array();
        $book_list_arr['bookList'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $book_list_name = array(
                'id' => $id,
                'name' => $name,
                'author' => $author,
                'aboutBook'=> $aboutBook,
                'admin' => $admin,
                'source_file' => $source_file,
                'image_path' => $image_path,
                'create_at' => $create_at
            );
            array_push($book_list_arr['bookList'],
            $book_list_name);
        }
        echo json_encode($book_list_arr);
    }
    else{
        echo json_encode(
            array('message' => 'No products found.')
        );
    }
    // 
        
?>