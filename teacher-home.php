<?php
include("teacher-header.php");
if (isset($_SESSION['teacherID'])) {
}else {
    header("location: entry-admin.php");
}
?>

<?php

// Connect to the database
$db = mysqli_connect("localhost", "root", "", "computer_db");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT COUNT(*) as total_users FROM user";
$us = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($us);
$total_user = $row['total_users'];


// Count the total number of complaints
$query = "SELECT COUNT(*) as total FROM computer_forms";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
$total = $row['total'];

?>
<?php

// Connect to the database
$db = mysqli_connect("localhost", "root", "", "computer_db");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Count the total number of complaints
$query = "SELECT COUNT(*) as total_qr FROM qrcode";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
$totalqr = $row['total_qr'];

?>
<?php

// Connect to the database
$db = mysqli_connect("localhost", "root", "", "computer_db");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Count the total number of complaints
$query = "SELECT COUNT(Q2) as total_labs FROM computer_forms";
$labs = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($labs);
$total_labs = $row['total_labs'];

?>
<?php

// Connect to the database
$db = mysqli_connect("localhost", "root", "", "computer_db");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Count the total number of complaints
$query = "SELECT COUNT(*) as total_computers FROM computers";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
$totalcomputers = $row['total_computers'];
?>


<?php

?>
        
    <div class="container-card">
        <a href="daily-attendance.php">
        <div class="card">
            <h2>Daily Attendance</h2>
            <p>View daily attendance </p>
            <img src="../Mini Project/assets/images/users.png">
            <p>Total Complaints: <?php echo $total; ?></p>
            <p></p>
        </div></a>
        <a href="retrive-computer.php">
        <div class="card">
            <h2>Computers</h2>
            <p>View and update the computers on the platform</p>
            <img id="i1" src="../Mini Project/assets/images/computers.png">
            <p>Total Computers: <?php echo $totalcomputers; ?></p>
            <p></p>
        </div></a>
        <a href="retrive-admin.php">
        <div class="card">
            <h2>QR Codes</h2>
            <p>View and manage QR codes of all the users on the platform </p>
            <img id="i1" src="../Mini Project/assets/images/qr codes.png">
            <p>Total QR Codes: <?php echo $totalqr; ?></p>
           <p></p>
        </div></a>

        <a href="stats.php">
        <div class="card">
            <h2>Stastics Of Labs</h2>
            <p>View all statistics of the labs on the platform</p>
            <img src="../Mini Project/assets/images/Stats.png" style="width: 220px;">
            <p>Total Labs: <?php echo $total_labs; ?></p>
            <p></p>
        </div></a>

        <a href="user_data.php">
        <div class="card">
            <h2>Users</h2>
            <p>View and manage all users of the labs on the platform</p>
            <img src="../Mini Project/assets/images/user_data.png" style="width: 250px;">
            <p>Total Labs: <?php echo $total_user; ?></p>
            <p></p>
        </div></a>

    </div>
</body>

</html>