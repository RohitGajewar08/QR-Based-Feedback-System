<?php
include('session-admin.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../Mini Project/assets/css/style6.css">
    <link rel="stylesheet" href="../Mini Project/assets/css/generate-admin.css">
    <link rel="stylesheet" href="../Mini Project/assets/css/admin-home.css">


</head>

<body>
    <header class="head">
        <nav>
            <div>
                <ul>
                    <li><a href="admin_home.php">Home</a></li>
                    <li><a href="retrive_complaint.php">Users Complaints</a></li>
                    <li><a href="admin-generate.php">Qr Code Generator</a></li>
                    <li><a href="retrive-admin.php">QR Codes</a></li>
                    <li><a href="stats.php">Stastics</a></li>
                </ul>
            </div>
            <h1>
                <center>Admin Dashboard</center>
            </h1>
            <div id="echo">
                <?php
                if (isset($_SESSION['adminID'])) {
                    echo "<h2 ><a >Logged in as: " . $_SESSION['adminID'] . "</a></li>"; ?>
            </div>
            <div>
            <?php echo "<h2 class='logout'><a href='logout.php'>Logout</a></li>";
                } else {
                    echo "<h2 style='margin-right: 280px;'><a href='admin-login.php'>Admin Login</a></li>";
                }
            ?>
            </div>
        </nav>
    </header>