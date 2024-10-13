<?php

require '../../includes/init.php';
header('Content-Type: application/json');

$currentDate = date('Y-m-d H:i:s');
$Id = $_POST['Id'];
$TotalAmount = $_POST['TotalAmount'];

$query = "UPDATE `order` SET Status = 'Delevered' WHERE Id = ?";
$param = [$Id];

execute($query, $param);

echo json_encode(["status" => "success", "message" => "Order Updated Successfully"]);

$paymentquery = "INSERT INTO Payment (OrderId, Date, Amount, Method, Status) VALUES (?, ?, ?, ?, ?)";
$paymentparam = [$Id, $currentDate, $TotalAmount, 'Cash', 'Received'];

execute($paymentquery, $paymentparam);
echo json_encode(["status" => "success", "message" => "Payment Added Successfully"]);

?>