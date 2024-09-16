<?php

require '../../includes/init.php';
header("Content-type:application/json");

$UserName = $_POST['UserName'];
$Password = $_POST['Password'];

$query = "SELECT * FROM Client WHERE UserName =? AND Password =?";
$params = [$UserName, $Password];

$result = selectOne($query, $params);
if ($result) {
    echo json_encode(["success" => true]);
    $_SESSION['LoggedIn'] = true;
    $_SESSION['UserId'] = $result['Id'];
} else {
    echo json_encode(["success" => false]);
}