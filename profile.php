<?php
session_start();
include 'db_connect.php';
if (!isset($_SESSION['uniqueId'])) {
    header("Location: home");
    exit();
}
$uniqueId = $_SESSION['uniqueId'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Profile</title>
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
            <a class="navbar-brand" href="participant">
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
                        <li><a class="dropdown-item" href="participant">Home</a></li>
                        <li><a class="dropdown-item" href="profile">Profile</a></li>
                        <li><a class="dropdown-item" href="applicantView">My Application</a></li>
                        <li><a class="dropdown-item" href="logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <div class="row g-0">
        <div class="col-sm-6 m-auto">
            <?php
            $sql = "SELECT * FROM users WHERE uniqueId = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $uniqueId);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            ?>
                <div class="card p-5">
                    <div class="">Personal</div>
                    <div class="mt-3">Name<strong class="mx-5"><?= $row['fullname'] ?></strong></div>
                    <div class="mt-3">Email<strong class="mx-5"><?= $row['email'] ?></strong></div>
                    <div class="mt-3">I am<strong class="mx-5"><?= $row['categoryType'] ?></strong></div>
                </div>
            <?php
            } else {
                echo "<script>alert('No record found for ID');</script>";
            }
            ?>

            <form method="post" action="changepassword.php">
                <input type="hidden" name="uniqueId" value="<?php echo $uniqueId; ?>">
                <div class="mt-2">
                    <label for="password">Enter your old password:</label>
                    <input type="password" class="form-control" placeholder="Old Password" name="password1" id="password1" required>
                </div>
                <div class="mt-2">
                    <label for="password">Enter your new password:</label>
                    <input type="password" class="form-control" placeholder="New Password" name="password" id="password" required>
                </div>
                <input type="submit" class="btn btn-primary mt-3" value="Change Password">
            </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>