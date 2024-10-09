<?php
require '../../includes/init.php';
header("Content-type:application/json");

$Id = $_POST['Id'];
$TypeId = $_POST['TypeId'];
$CityId = $_POST['CityId'];
$StateId = $_POST['StateId'];
$PropertyName = $_POST['PropertyName'];
$Address = $_POST['Address'];
$Sqft = $_POST['Sqft'];
$Description = $_POST['Description'];
$Price = $_POST['Price'];

$time = time();
$fileName = "$time-" . $_FILES['Image']['PropertyName'];
$tmpFileName = $_FILES['Image']['tmp_name'];
move_uploaded_file($tmpFileName, pathOf("assets/images/uploads/$fileName"));

$query = "UPDATE Propertydetails SET TypeId=?, CityId=?, StateId=? PropertyName=?, Address=?, Sqft=?, Description=?, Price=?, ImageFileName=? WHERE Id=?";
$params = [$TypeId, $CityId, $StateId, $PropertyName, $Address, $Sqft, $Description, $Price, $fileName, $Id];

$result = execute($query, $params);
if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);
?>