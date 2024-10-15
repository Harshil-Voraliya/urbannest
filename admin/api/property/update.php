<?php
    require '../../includes/init.php';
    header('Content-Type: application/json');

    $Id = $_POST['Id'];
    $Type = $_POST['TypeId'];
    $City = $_POST['CityId'];
    $State = $_POST['StateId'];
    $PropertyName = $_POST['PropertyName'];
    $Address = $_POST['Address'];
    $Sqft = $_POST['Sqft'];
    $Description = $_POST['Description'];
    $Price = $_POST['Price'];
    $Image = $_POST['Image'];
    $Image2 = $_POST['Image2'];
    $Image3 = $_POST['Image3'];
    $Image4 = $_POST['Image4'];
    $Image5 = $_POST['Image5'];

    $query = "UPDATE TypeId = ?, CityId = ?, StateId = ?, PropertyName = ?, Address = ?, Sqft = ?, Description = ?, Price = ?, Image = ?, Image2 = ?, Image3 = ?, Image4 = ?, Image5 = ? WHERE Id = ?";
    $param = [$Type, $City, $State, $PropertyName, $Address, $Sqft, $Description, $Price, $Image, $Image2, $Image3, $Image4, $Image5, $Id];
?>