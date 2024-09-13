<?php

    require '../../includes/init.php';
    header('Content-Type: application/json');

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];

    $query = "INSERT INTO feedbacks (Name,Email, Message) VALUES (?, ?, ?)";
    $param = [$Name, $Email, $Message];

    execute($query, $param);

    echo json_encode(["status" => "success", "message" => "Feedback Submitted Successfully"]);

?>