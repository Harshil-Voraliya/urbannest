<?php
    require '../../includes/init.php';
    header('Content-Type: application/json');

    $Id = $_POST['Id'];
    $StateId = $_POST['StateId'];
    $Name = $_POST['Name'];

    $query = "UPDATE city SET Name = ?, StateId = ?  WHERE Id = ?";
    $param = [$Name, $StateId, $Id];

    $result = execute($query, $param);

    if($result) {
        echo json_encode(["status" => "success", "message" => "State Updated Successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Something Went Wrong"]);
    }
?>