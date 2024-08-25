<?php
session_start();

// Include the database connection file
include 'db_connect.php';

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare SQL statement to prevent SQL injection
$sql = $conn->prepare("SELECT uniqueId, password FROM users WHERE email = ?");
$sql->bind_param("s", $email);
$sql->execute();
$sql->store_result();

if ($sql->num_rows > 0) {
    $sql->bind_result($uniqueId, $hashed_password);
    $sql->fetch();

    // Verify password
    if (password_verify($password, $hashed_password)) {
        // Password is correct, start a session
        $_SESSION['uniqueId'] = $uniqueId;
        echo "Login successful! Welcome, " . $email;
        // Redirect to a protected page or dashboard
        header("Location: participant");
        exit();
    } else {
        echo "Invalid email or password!";
    }
} else {
    echo "Invalid email or password!";
}

$sql->close();
$conn->close();
