<?php

require '../../includes/init.php';
header('Content-Type: application/json');

$CartId = $_POST['CartId'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];
$PinCode = $_POST['PinCode'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$TotalPrice = $_POST['TotalPrice'];

// Insert into checkout
$query = "INSERT INTO checkout (CartId, FirstName, LastName, Address, City, State, PinCode, Phone, Email) VALUES (?,?,?,?,?,?,?,?,?)";
$param = [$CartId, $FirstName, $LastName, $Address, $City, $State, $PinCode, $Phone, $Email];    
execute($query, $param);
echo json_encode(["status" => "success", "message" => "Checkout Submitted Successfully"]);

// Order API
$cartData = select("SELECT * FROM Cart WHERE Id = $CartId");
$query = "INSERT INTO `Order` (CartId, TotalAmount, Status) VALUES (?,?,?)";  // Enclose Order in backticks
$param = [$CartId, $TotalPrice, "Pending"];
execute($query, $param);
echo json_encode(["status" => "success", "message" => "Order Submitted Successfully"]);

// Uncomment this section if you want to delete the cart after order
// $query = "DELETE FROM carts WHERE Id = ?";
// $param = [$CartId];
// $result = execute($query, $param);
// echo json_encode(["status" => "success", "message" => "Cart Deleted Successfully"]);
?>
