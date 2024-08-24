<?php
// db_connect.php

$servername = "localhost";
$username = "u887167220_tcoe";
$password = "Tcoe@2024$";
$dbname = "u887167220_tcoe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
