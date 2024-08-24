<?php
session_start();
session_destroy(); // Destroy the session
header("Location: x1.html"); // Redirect to login page
?>
