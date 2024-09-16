<?php

header("Content-Type: application/json");
require '../../includes/init.php';


$UserName = $_POST["UserName"];
$Email = $_POST["Email"];
$Password = $_POST["Password"];

$query = "INSERT INTO Client (UserName, Email, Password) VALUES (?,?,?)";
$param = [$UserName, $Email, $Password];

execute($query, $param);

echo json_encode(["status" => "success", "message" => "Role Added"]);
?>