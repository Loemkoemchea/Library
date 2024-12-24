<?php
    header('Access-Control-ALlow-Origin:*');
    header('Content-Type: application/json');

    include_once("../controller/init.php");
    // admin table
    $admin = new admin($db);
    $adminResult = $admin->read();
    $num = $adminResult->rowCount();
    if($num>0){
        $admin_arr = array();
        $admin_arr['admin'] = array();

        while($row = $adminResult->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $admin_name = array(
                'id' => $id,
                'first_Name' => $first_Name,
                'last_Name' => $last_Name,
                'gender'=> $gender,
                'username'=> $username,
                'password'=> $pasword,
                'create_at' => $create_at
            );
            array_push($admin_arr['admin'],
            $admin_name);
        }
        echo json_encode($admin_arr);
    }
    else{
        echo json_encode(
            array('message' => 'No admin found.')
        );
    }
?>