<?php
   header('Access-Control-Allow-Origin: *');
   header('Content-Type: application/json');
   header('Access-Control-Allow-Methods: POST');
   header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
   
   include_once('../controller/init.php');
   
   $book_list = new Product($db);
   
   $book_list->name = $_POST['name'];
   $book_list->author = $_POST['author'];
   $book_list->aboutBook = $_POST['aboutBook'];
   $book_list->admin = $_POST['admin'];
   
   if (isset($_FILES['bookImage'])) {
       $targetDir = "../image/";
       $fileName = basename($_FILES['bookImage']['name']);
       $targetFilePath = $targetDir . $fileName;
       
       if (move_uploaded_file($_FILES['bookImage']['tmp_name'], $targetFilePath)) {
           $book_list->image_path = $targetFilePath;
        } else {
            echo json_encode(array('message' => 'Image upload failed'));
            exit;
        }
    } else {
        $book_list->image_path = null;
    }
    
    // Handle PDF upload
    if (isset($_FILES['bookPdf'])) {
        $pdfTargetDir = "../source file/";
        $pdfFileName = basename($_FILES['bookPdf']['name']);
        $pdfTargetFilePath = $pdfTargetDir . $pdfFileName;
        
        if (move_uploaded_file($_FILES['bookPdf']['tmp_name'], $pdfTargetFilePath)) {
            $book_list->source_file = $pdfTargetFilePath;
        } else {
            echo json_encode(array('message' => 'PDF upload failed'));
            exit;
        }
    } else {
        $book_list->source_file = null;
    }
    // Create the book record
    if ($book_list->create()) {
        echo json_encode(array('message' => 'Product Created'));
    } else {
        echo json_encode(array('message' => 'Product Not Created'));
    }
    
    // user table
    
?>
