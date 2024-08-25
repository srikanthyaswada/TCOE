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

    // $randomNumber = mt_rand(100000, 999999);
    // $to = $email;
    // $subject = "Registration";
    // $message = "Hello" . $fullname . ",\r\n Your Access Code is " . $randomNumber;
    // $headers = "MIME-Version: 1.0" . "\r\n";
    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // $headers .= "From: swamy.vitasoft@gmail.com" . "\r\n";
    // $headers .= "Reply-To: swamy.vitasoft@gmail.com" . "\r\n";
    // $headers .= "X-Mailer: PHP/" . phpversion();

    // Send the email
    // if (mail($to, $subject, $message, $headers)) {
    //     echo "<script>alert('Registration successful!...');</script>";
    // } else {
    //     echo "<script>alert('Registration successful!...');</script>";
    // }
    echo "<script>alert('Registration successful!...');</script>";
    echo "<script> window.location.href='home';</script>";
} else {
    echo "<script>alert(''.$conn->error);</script>";
}

$conn->close();
