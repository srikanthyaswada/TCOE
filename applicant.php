<?php
session_start();
include 'db_connect.php'; // Include your database connection file

// Set the timezone to Indian Standard Time (IST)
date_default_timezone_set('Asia/Kolkata');

// Applicant Details
$applicantName = $_POST['applicantName'];
$organizationName = $_POST['organizationName'];
$contactNumber = $_POST['contactNumber'];
$email = $_POST['email'];
$city = $_POST['city'];
$state = $_POST['state'];
$postalAddress = $_POST['postalAddress'];
$applying = $_POST['applying'];
$industry = $_POST['industry'];
$website = $_POST['website'];

// Common form data
$status = 1;
$createAt = date('Y-m-d H:i:s');
$uniqueId = $_SESSION['uniqueId'];

$folderName = 'assets/users/' . $uniqueId;
if (!file_exists($folderName)) {
    $folderName = "assets/users";
}

// Handle file uploads
$productFile = $_FILES['productFile']['name'];
$productFileTmp = $_FILES['productFile']['tmp_name'];
$productFileExtension = pathinfo($productFile, PATHINFO_EXTENSION);
$productFileName = 'product_'.date('YmdHis') . '.' . $productFileExtension;
$productFilePath = $folderName . '/' . $productFileName; // Path to save the file

$presentationVideo = $_FILES['presentationVideo']['name'];
$presentationVideoTmp = $_FILES['presentationVideo']['tmp_name'];
$presentationVideoExtension = pathinfo($presentationVideo, PATHINFO_EXTENSION);
$presentationVideoName = 'presentation_'.date('YmdHis') . '.' . $presentationVideoExtension;
$presentationVideoPath = $folderName . '/' . $presentationVideoName; // Path to save the file

$proofPoC = $_FILES['proofPoC']['name'];
$proofPoCTmp = $_FILES['proofPoC']['tmp_name'];
$proofPoCExtension = pathinfo($proofPoC, PATHINFO_EXTENSION);
$proofPoCName = 'proofPoC_'.date('YmdHis') . '.' . $proofPoCExtension;
$proofPoCPath = $folderName . '/' . $proofPoCName; // Path to save the file

$similarProductFile = $_FILES['similarProductFile']['name'];
$similarProductFileTmp = $_FILES['similarProductFile']['tmp_name'];
$similarProductFileExtension = pathinfo($similarProductFile, PATHINFO_EXTENSION);
$similarProductFileName = 'productFile_'.date('YmdHis') . '.' . $similarProductFileExtension;
$similarProductFilePath = $folderName . '/' . $similarProductFileName; // Path to save the file

// Move uploaded files to the 'uploads' directory
move_uploaded_file($productFileTmp, $productFilePath);
move_uploaded_file($presentationVideoTmp, $presentationVideoPath);
move_uploaded_file($proofPoCTmp, $proofPoCPath);
move_uploaded_file($similarProductFileTmp, $similarProductFilePath);

// Technical Details
$domain = $_POST['domain'];
$product = $_POST['product'];
$productFile = $productFilePath;
$presentationVideo = $presentationVideoPath;
$technologyLevel = $_POST['technologyLevel'];
$proofPoC = $proofPoCPath;
$describeProduct = $_POST['describeProduct'];
$productPatent = $_POST['productPatent'];
$patentDetails = $_POST['patentDetails'];
$similarProduct = $_POST['similarProduct'];
$similarProductFile = $similarProductFilePath;

$shareholding = $_FILES['shareholding']['name'];
$shareholdingTmp = $_FILES['shareholding']['tmp_name'];
$shareholdingExtension = pathinfo($shareholding, PATHINFO_EXTENSION);
$shareholdingName = 'shareholding_'.date('YmdHis') . '.' . $shareholdingExtension;
$shareholdingPath = $folderName . '/' . $shareholdingName;

$incorporation = $_FILES['incorporation']['name'];
$incorporationTmp = $_FILES['incorporation']['tmp_name'];
$incorporationExtension = pathinfo($incorporation, PATHINFO_EXTENSION);
$incorporationName = 'incorporation_'.date('YmdHis') . '.' . $incorporationExtension;
$incorporationPath = $folderName . '/' . $incorporationName;

$idProof = $_FILES['idProof']['name'];
$idProofTmp = $_FILES['idProof']['tmp_name'];
$idProofExtension = pathinfo($idProof, PATHINFO_EXTENSION);
$idProofName = 'idProof_'.date('YmdHis') . '.' . $idProofExtension;
$idProofPath = $folderName . '/' . $idProofName;

// Move uploaded files to the 'uploads' directory
move_uploaded_file($shareholdingTmp, $shareholdingPath);
move_uploaded_file($incorporationTmp, $incorporationPath);
move_uploaded_file($idProofTmp, $idProofPath);

// Document Details
$shareholding = $shareholdingPath;
$incorporation = $incorporationPath;
$idProof = $idProofPath;
// Insert data into the database
$sql = "INSERT INTO applicant (applicantName, organizationName, contactNumber, email, city, state, postalAddress, applying, industry, website, status, createAt, uniqueId)
        VALUES ('$applicantName', '$organizationName', '$contactNumber', '$email', '$city', '$state', '$postalAddress', '$applying', '$industry', '$website', '$status', '$createAt', '$uniqueId')";

$sql1 = "INSERT INTO technical (domain, product, productFile, presentationVideo, technologyLevel, proofPoC, describeProduct, productPatent, patentDetails, similarProduct, similarProductFile, status, createAt, uniqueId) VALUES ('$domain', '$product', '$productFile', '$presentationVideo', '$technologyLevel', '$proofPoC', '$describeProduct', '$productPatent', '$patentDetails', '$similarProduct', '$similarProductFile', '$status', '$createAt', '$uniqueId')";

$sql2 = "INSERT INTO documents (shareholding, incorporation, idProof, status, createAt, uniqueId) VALUES ('$shareholding', '$incorporation', '$idProof', '$status', '$createAt', '$uniqueId')";
if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    // Redirect to another page after successful submission
    header("Refresh: 5; URL=application");
    echo "Registration successful...";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
