<?php

header("Content-Type: application/json");
require '../../includes/init.php';


$Name = $_POST["Name"];

$query = "INSERT INTO City (Name) VALUES (?)";
$param = [$Name];

execute($query, $param);

echo json_encode(["status" => "success", "message" => "City Added"]);
?>