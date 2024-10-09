<?php

    require '../../includes/init.php';
    header('Content-Type: application/json');

    $PropertyId = $_POST['PropertyId'];
    $ClientId = $_POST['UserId'];

    $query = "INSERT INTO cart (PropertyId, ClientId) VALUES (?, ?)";
    $param = [$PropertyId, $ClientId];

    execute($query, $param);

    echo json_encode(["status" => "success", "message" => "Cart Submitted Successfully"]);

?>