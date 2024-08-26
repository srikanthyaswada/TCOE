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

$randomNumber = mt_rand(100000, 999999);

// Insert data into database
$sql = "INSERT INTO users (fullname, email, password, categoryType, categoryName, status, createAt, access_code, reset_token, reset_expiry) 
        VALUES ('$fullname', '$email', '$password', '$categoryType', '$categoryName', '$status', '$createAt', '$randomNumber', Null, Null)";

if ($conn->query($sql) === TRUE) {
    $folderName = 'assets/users/' . $conn->insert_id;
    if (!file_exists($folderName)) {
        if (mkdir($folderName, 0777, true)) {
        } else {
            $folderName = "assets/users";
        }
    }

    $participantName = $fullname;
    $to = $email;
    $subject = "Welcome to the 5G/6G Hackathon!";
    // $message = "Hello" . $fullname . ",\r\n Your Access Code is " . $randomNumber;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: 5g6ghack24@tcoe.in" . "\r\n";
    $headers .= "Reply-To: 5g6ghack24@tcoe.in" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $message = "
    <html>
    <head>
    <title>Welcome to the 5G/6G Hackathon!</title>
    </head>
    <body>
    <p>Dear {$participantName},</p>
    <p>Welcome aboard!</p>
    <p>
        Congratulations on registering for the <strong>5G/6G Hackathon</strong> managed by TCoE by DoT, MoC, GoI, a platform where innovation meets technology. We’re thrilled to have you join us in pushing the boundaries of 5G and 6G technologies.
    </p>
    <br>
    <p>Thank you,</p>
    <p>Team - TCoE</p>
    </body>
    </html>
    ";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Welcome email sent successfully');</script>";
    } else {
        echo "<script>alert('Failed to send the welcome email.');</script>";
    }
} else {
    echo "<script>alert(''.$conn->error);</script>";
}
echo "<script> window.location.href='home#authModal';</script>";

$conn->close();
