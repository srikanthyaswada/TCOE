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
$otherindustry = "";
if (isset($_POST['otherindustry']) && !empty(trim($_POST['otherindustry']))) {
  $otherindustry = $_POST['otherindustry'];
}
$problemsStatement = $_POST['problemsStatement'];
$applicationVerticals = "";
if (isset($_POST['applicationVerticals']) && !empty(trim($_POST['applicationVerticals']))) {
  $applicationVerticals = $_POST['applicationVerticals'];
}
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
$productFileName = 'product_' . date('YmdHis') . '.' . $productFileExtension;
$productFilePath = $folderName . '/' . $productFileName; // Path to save the file
move_uploaded_file($productFileTmp, $productFilePath);

$presentationVideo = $_FILES['presentationVideo']['name'];
$presentationVideoTmp = $_FILES['presentationVideo']['tmp_name'];
$presentationVideoExtension = pathinfo($presentationVideo, PATHINFO_EXTENSION);
$presentationVideoName = 'presentation_' . date('YmdHis') . '.' . $presentationVideoExtension;
$presentationVideoPath = $folderName . '/' . $presentationVideoName; // Path to save the file
move_uploaded_file($presentationVideoTmp, $presentationVideoPath);

$proofPoC = $_FILES['proofPoC']['name'];
$proofPoCTmp = $_FILES['proofPoC']['tmp_name'];
$proofPoCExtension = pathinfo($proofPoC, PATHINFO_EXTENSION);
$proofPoCName = 'proofPoC_' . date('YmdHis') . '.' . $proofPoCExtension;
$proofPoCPath = $folderName . '/' . $proofPoCName; // Path to save the file
move_uploaded_file($proofPoCTmp, $proofPoCPath);

$similarProductFile = $_FILES['similarProductFile']['name'];
$similarProductFilePath = "";
if (isset($similarProductFile) && !empty(trim($similarProductFile))) {
  $similarProductFileTmp = $_FILES['similarProductFile']['tmp_name'];
  $similarProductFileExtension = pathinfo($similarProductFile, PATHINFO_EXTENSION);
  $similarProductFileName = 'productFile_' . date('YmdHis') . '.' . $similarProductFileExtension;
  $similarProductFilePath = $folderName . '/' . $similarProductFileName; // Path to save the file
  move_uploaded_file($similarProductFileTmp, $similarProductFilePath);
}

// Technical Details
$domain = $_POST['domain'];
$product = $_POST['product'];
$productFile = $productFilePath;
$presentationVideo = $presentationVideoPath;
$technologyLevel = $_POST['technologyLevel'];
$proofPoC = $proofPoCPath;
$describeProduct = $_POST['describeProduct'];


$productPatent = $_POST['productPatent'];
$patentDetails = "";
if (isset($_POST['patentDetails']) && !empty(trim($_POST['patentDetails']))) {
  $patentDetails = $_POST['patentDetails'];
}
$similarProduct = $_POST['similarProduct'];
$similarProductFile = $similarProductFilePath;

$shareholding = $_FILES['shareholding']['name'];
$shareholdingTmp = $_FILES['shareholding']['tmp_name'];
$shareholdingExtension = pathinfo($shareholding, PATHINFO_EXTENSION);
$shareholdingName = 'shareholding_' . date('YmdHis') . '.' . $shareholdingExtension;
$shareholdingPath = $folderName . '/' . $shareholdingName;
move_uploaded_file($shareholdingTmp, $shareholdingPath);

$incorporation = $_FILES['incorporation']['name'];
$incorporationTmp = $_FILES['incorporation']['tmp_name'];
$incorporationExtension = pathinfo($incorporation, PATHINFO_EXTENSION);
$incorporationName = 'incorporation_' . date('YmdHis') . '.' . $incorporationExtension;
$incorporationPath = $folderName . '/' . $incorporationName;
move_uploaded_file($incorporationTmp, $incorporationPath);

$idProof = $_FILES['idProof']['name'];
$idProofTmp = $_FILES['idProof']['tmp_name'];
$idProofExtension = pathinfo($idProof, PATHINFO_EXTENSION);
$idProofName = 'idProof_' . date('YmdHis') . '.' . $idProofExtension;
$idProofPath = $folderName . '/' . $idProofName;
move_uploaded_file($idProofTmp, $idProofPath);

// Document Details
$shareholding = $shareholdingPath;
$incorporation = $incorporationPath;
$idProof = $idProofPath;
// Insert data into the database
$sql = "INSERT INTO applicant (applicantName, organizationName, contactNumber, email, city, state, postalAddress, applying, industry, otherindustry, problemsStatement, applicationVerticals, website, status, createAt, uniqueId)
        VALUES ('$applicantName', '$organizationName', '$contactNumber', '$email', '$city', '$state', '$postalAddress', '$applying', '$industry', '$otherindustry', '$problemsStatement', '$applicationVerticals', '$website', '$status', '$createAt', '$uniqueId')";

$sql1 = "INSERT INTO technical (domain, product, productFile, presentationVideo, technologyLevel, proofPoC, describeProduct, productPatent, patentDetails, similarProduct, similarProductFile, status, createAt, uniqueId) VALUES ('$domain', '$product', '$productFile', '$presentationVideo', '$technologyLevel', '$proofPoC', '$describeProduct', '$productPatent', '$patentDetails', '$similarProduct', '$similarProductFile', '$status', '$createAt', '$uniqueId')";

$sql2 = "INSERT INTO documents (shareholding, incorporation, idProof, status, createAt, uniqueId) VALUES ('$shareholding', '$incorporation', '$idProof', '$status', '$createAt', '$uniqueId')";
if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {

  $to = $email;
  $subject = 'Application Submission for 5G/6G Hackathon';
  $organizerName = $organizationName;
  $teamName = $applicantName;
  $projectTitle = $problemsStatement;
  $teamEmail = $email;
  $teamPhone = $contactNumber;

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: 5g6ghack24@tcoe.in" . "\r\n";
  $headers .= "Reply-To: 5g6ghack24@tcoe.in" . "\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();

  // Email body
  $message = "
<html>
<head>
  <title>Application Submission for 5G/6G Hackathon</title>
</head>
<body>
  <p>Dear {$organizerName},</p>
  <p>We are excited to submit our application for the <strong>5G/6G Hackathon</strong>.</p>
  <p><strong>Team Details:</strong></p>
  <ul>
    <li><strong>Applicant Name:</strong> {$teamName}</li>
    <li><strong>Problem Statement:</strong> {$projectTitle}</li>
    <li><strong>Contact Information:</strong></li>
    <ul>
      <li><strong>Email:</strong> {$teamEmail}</li>
      <li><strong>Phone:</strong> {$teamPhone}</li>
    </ul>
  </ul>
  <p>We will let you know once your application gets shortlisted. Thank you for your patience.</p>
  <br>
  <p>Thank you,</p>
  <p>Team – TCoE</p>
</body>
</html>
";

  if (mail($email, $subject, $message, $headers)) {
    echo "<script>alert('Application submission email sent successfully to {$organizerName}.');</script>";
  } else {
    echo "<script>alert('Failed to send the application submission email.');</script>";
  }

  // Redirect to another page after successful submission
  // echo "<script>alert('Please note: Once Application is submitted user cant Edit CTA: Submit');</script>";
} else {
  echo "<script>alert(''.$conn->error);</script>";
}
echo "<script> window.location.href='applicantView';</script>";

$conn->close();
