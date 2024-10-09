<?php

require('../../includes/init.php');
header('Content-Type: application/json');

$Id = $_POST['Id'];
$query = "UPDATE Propertydetails SET IsDeleted = 1 WHERE Id = ?";
$param = [$Id];
$result = execute($query, $param);

if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);