<?php
require '../../includes/init.php';
header("Content-type:application/json");

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

$query = "INSERT INTO Propertydetails (TypeId, CityId, StateId, PropertyName, Address, Sqft, Description, Price, ImageFileName) VALUES(?,?,?,?,?,?,?,?,?)";
$params = [$TypeId, $CityId, $StateId, $PropertyName, $Address, $Sqft, $Description, $Price, $fileName];

$result = execute($query, $params);
if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);

    header('Location: ../../pages/property/index.php');
?>