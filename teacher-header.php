<?php
include('session-admin.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="../Mini Project/assets/css/style6.css">
    <link rel="stylesheet" href="../Mini Project/assets/css/generate-admin.css">
    <link rel="stylesheet" href="../Mini Project/assets/css/admin-home.css">


</head>

<body>
    <header class="head">
        <nav>
            <div>
                <ul>
                    <li><a href="teacher-home.php">Home</a></li>
                    <li><a href="teacher-generate.php">Qr Code Generator</a></li>
                    <li><a href="#">Stastics</a></li>
                </ul>
            </div>
            <h1 style="margin-left: 50px;">
                <center>Teacher Dashboard</center>
            </h1>
            <div id="echo">
                <?php
                if (isset($_SESSION['teacherID'])) {
                    echo "<h2 ><a style='margin-left: 225px;'>Logged in as: " . $_SESSION['teacherID'] . "</a></li>"; ?>
            </div>
            <div>
            <?php echo "<h2 class='logout'><a href='logout.php'>Logout</a></li>";
                } else {
                    echo "<h2 style='margin-right: 280px;'><a href='teacher-login.php'>Teacher Login</a></li>";
                }
            ?>
            </div>
        </nav>
    </header>