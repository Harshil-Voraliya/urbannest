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

$currentDate = date('Y-m-d');
// Insert into checkout
$query = "INSERT INTO checkout (CartId, FirstName, LastName, Address, City, State, PinCode, Phone, Email) VALUES (?,?,?,?,?,?,?,?,?)";
$param = [$CartId, $FirstName, $LastName, $Address, $City, $State, $PinCode, $Phone, $Email];    
execute($query, $param);

// Order API
$cartData = select("SELECT * FROM Cart WHERE Id = $CartId");
$query = "INSERT INTO `Order` (CartId, TotalAmount, Status, Date) VALUES (?,?,?,?)";  // Enclose Order in backticks
$param = [$CartId, $TotalPrice, "Pending", $currentDate];
execute($query, $param);

$query = "UPDATE Carts SET IsDeleted = -1 WHERE Id = ?";
$param = [$CartId];
$result = execute($query, $param);
echo json_encode(["status" => "success", "message" => "Cart Deleted Successfully"]);
?>
