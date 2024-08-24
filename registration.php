<?php
date_default_timezone_set('Asia/Kolkata');
// Check connection
include 'db_connect.php';

// Get form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password for security
$categoryType = $_POST['categoryType'];
$categoryName = $_POST['categoryName'];
$status = 1;
$createAt = date("Y-m-d H:i:s");

// Insert data into database
$sql = "INSERT INTO users (fullname, email, password, categoryType, categoryName, status, createAt) 
        VALUES ('$fullname', '$email', '$password', '$categoryType', '$categoryName', '$status', '$createAt')";

if ($conn->query($sql) === TRUE) {
    $folderName = 'assets/users/' . $conn->insert_id;
    if (!file_exists($folderName)) {
        if (mkdir($folderName, 0777, true)) {
        } else {
            $folderName = "assets/users";
        }
    }
    header("Refresh: 5; URL=index.html");
    echo "Registration successful!...";
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
