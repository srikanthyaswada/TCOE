<?php
date_default_timezone_set('Asia/Kolkata');
// Include the database connection
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if the email exists in the database
    $sql = "SELECT uniqueId, fullname FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Generate a unique token
        $row = $result->fetch_assoc();
        $token = bin2hex(random_bytes(50));

        // Store the token in the database with an expiration time
        $expiry = date("Y-m-d H:i:s", strtotime('+1 hour')); // Token valid for 1 hour
        $sql = "UPDATE users SET reset_token = ?, reset_expiry = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $token, $expiry, $email);
        $stmt->execute();


        $fullname = $row['fullname'];
        // Send the reset email
        $resetLink = "https://theaischool.co.in/new/reset_password.php?token=" . $token;
        $subject = "Reset Your Password for the 5G/6G Hackathon";
        // $message = "To reset your password, please click on the following link: " . $resetLink;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: 5g6ghack24@tcoe.in" . "\r\n";
        $headers .= "Reply-To: 5g6ghack24@tcoe.in" . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();

        $message = "
        <html>
        <head>
        <title>Reset Your Password for the 5G/6G Hackathon</title>
        </head>
        <body>
        <p>Dear {$fullname},</p>
        <p>We received a request to reset your password for the <strong>5G/6G Hackathon</strong> platform. If you made this request, please click the link below to set a new password:</p>
        <p><a href='{$resetLink}' style='color: #1a73e8;'>Reset Password</a></p>
        <p>If the link above doesn't work, you can copy and paste the following URL into your browser:</p>
        <p><a href='{$resetLink}' style='color: #1a73e8;'>{$resetLink}</a></p>
        <br>
        <p>Thank you,</p>
        <p>Team – TCoE</p>
        </body>
        </html>
        ";

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
