<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

include_once("../controller/init.php");

// user table
$user = new user($db);

// Get month from the request (if provided)
$month = isset($_GET['month']) ? $_GET['month'] : null;

// Fetch user data, filtered by month if provided
$userResult = $user->read($month);
$num = $userResult->rowCount();

$response = array();
if ($num > 0) {
    $user_arr = array();
    $user_arr['user'] = array();

    while ($row = $userResult->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $user_name = array(
            'id' => $id,
            'first_Name' => $first_Name,
            'last_Name' => $last_Name,
            'gender' => $gender,
            'book' => $book,
            'create_at' => $create_at
        );
        array_push($user_arr['user'], $user_name);
    }
    $response = $user_arr;
} else {
    $response = array('user' => []); // Return an empty array for 'user' when no data found
}

echo json_encode($response);
?>
