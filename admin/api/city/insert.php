<?php

header("Content-Type: application/json");
require '../../includes/init.php';


$StateId = $_POST["StateId"];
$Name = $_POST["Name"];

$query = "INSERT INTO City (StateId, Name) VALUES (?,?)";
$param = [$StateId, $Name];

execute($query, $param);

echo json_encode(["status" => "success", "message" => "City Added"]);
?>