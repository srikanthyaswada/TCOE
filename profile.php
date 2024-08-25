<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['uniqueId'])) {
    // User is not logged in, redirect to login page
    header("Location: index.html");
    exit();
}
$uniqueId = $_SESSION['uniqueId'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Forms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/application.css" />
</head>

<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light p-0 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img
                    src="./assets/images/Tcoe_logo.jpg"
                    alt="Logo"
                    width="80"
                    height="50" />
            </a>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="profileDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-person-circle" style="font-size: 2rem"></i>
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="participant.php">My Dashboard</a></li>
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="application.html">Application</a></li>
                        <li><a class="dropdown-item" href="applicantView.php">View</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <div class="row g-0">
        <div class="col-sm-6 m-auto text-primary">
            <?php
            $sql = "SELECT * FROM users WHERE uniqueId = ?";

            // Initialize a prepared statement
            $stmt = $conn->prepare($sql);

            // Bind parameters
            $stmt->bind_param("i", $uniqueId); // "i" indicates the type is integer

            // Execute the query
            $stmt->execute();

            // Get the result
            $result = $stmt->get_result();

            // Check if a record was found
            if ($result->num_rows > 0) {
                // Fetch the data
                $row = $result->fetch_assoc();

                // Display the data
                echo "Name: " . $row['fullname'] . "<br>";
                echo "Email: " . $row['email'] . "<br>";
            } else {
                echo "No record found for ID: " . $id;
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>