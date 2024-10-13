<?php
require '../../includes/init.php';
header("Content-type:application/json");

// Retrieve form data
$TypeId = $_POST['TypeId'];
$CityId = $_POST['CityId'];
$StateId = $_POST['StateId'];
$PropertyName = $_POST['PropertyName'];
$Address = $_POST['Address'];
$Sqft = $_POST['Sqft'];
$Description = $_POST['Description'];
$Price = $_POST['Price'];

// Initialize an array to hold the image filenames
$imageFileNames = [];

// Process each image upload (up to 5 images)
for ($i = 1; $i <= 5; $i++) {
    $imageField = "Image" . ($i === 1 ? "" : $i); // Image, Image2, ..., Image5
    if (isset($_FILES[$imageField]) && $_FILES[$imageField]['error'] === UPLOAD_ERR_OK) {
        $fileName = time() . "-" . basename($_FILES[$imageField]['name']);
        $tmpFileName = $_FILES[$imageField]['tmp_name'];
        
        // Move the uploaded file to the designated folder
        if (move_uploaded_file($tmpFileName, pathOf("assets/images/uploads/$fileName"))) {
            $imageFileNames[$i - 1] = $fileName; // Store the filename
        } else {
            $imageFileNames[$i - 1] = null; // Store null if upload fails
        }
    } else {
        $imageFileNames[$i - 1] = null; // Store null if no file is uploaded
    }
}

// Prepare the insert query
$query = "INSERT INTO PropertyDetails (TypeId, CityId, StateId, PropertyName, Address, Sqft, Description, Price, ImageFileName, ImageFileName2, ImageFileName3, ImageFileName4, ImageFileName5) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$params = [
    $TypeId,
    $CityId,
    $StateId,
    $PropertyName,
    $Address,
    $Sqft,
    $Description,
    $Price,
    $imageFileNames[0], // ImageFileName
    $imageFileNames[1], // ImageFileName2
    $imageFileNames[2], // ImageFileName3
    $imageFileNames[3], // ImageFileName4
    $imageFileNames[4]  // ImageFileName5
];

// Execute the query
$result = execute($query, $params);

// Respond based on the result of the query
echo json_encode(["success" => $result]);

// Redirect after processing (optional, as we're returning JSON)
header('Location: ../../pages/property/index.php');
?>
