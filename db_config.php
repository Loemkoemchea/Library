<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "assignment";

    $db = new PDO("mysql:host=$db_server;dbname=$db_name",$db_user,$db_password);

    define("App_NAME","ASSIGNMENT API by KOEMCHEA"); 

?>