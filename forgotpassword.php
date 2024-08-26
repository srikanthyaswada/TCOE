<?php
date_default_timezone_set('Asia/Kolkata');
// Include the database connection
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if the email exists in the database
    $sql = "SELECT uniqueId FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Generate a unique token
        $token = bin2hex(random_bytes(50));

        // Store the token in the database with an expiration time
        $expiry = date("Y-m-d H:i:s", strtotime('+1 hour')); // Token valid for 1 hour
        $sql = "UPDATE users SET reset_token = ?, reset_expiry = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $token, $expiry, $email);
        $stmt->execute();

        // Send the reset email
        $resetLink = "https://theaischool.co.in/new/reset_password.php?token=" . $token;
        $subject = "Password Reset Request";
        $message = "To reset your password, please click on the following link: " . $resetLink;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: swamy.vitasoft@gmail.com" . "\r\n";
        $headers .= "Reply-To: swamy.vitasoft@gmail.com" . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        if (mail($email, $subject, $message, $headers)) {
            echo "<script>alert('A password reset link has been sent to your email address.');</script>";
        } else {
            echo "<script>alert('Failed to send the reset email. Please try again later.');</script>";
        }
    } else {
        echo "<script>alert('No account found with that email address.');</script>";
    }
    echo "<script> window.location.href='home#authModal';</script>";

    $stmt->close();
    $conn->close();
}
