<?php
// Connect to the database server
$host = "localhost";
$dbname = "computer_db";
$username = "root";
$password = "";

$link = mysqli_connect($host, $username, $password, $dbname);


// Select the database


// Execute a SQL query

$selectQuery = "SELECT * FROM computer_forms";
$result = mysqli_query($link, $selectQuery);

// Process the result set

mysqli_close($link);
?>
<?php

// Connect to the database
$db = mysqli_connect("localhost", "root", "", "computer_db");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Count the total number of complaints
$query = "SELECT COUNT(*) as total FROM computer_forms";
$res = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($res);
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
$query = "SELECT COUNT(*) as total_pending FROM computer_forms WHERE status = 'Pending'";
$re = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($re);
$total_pending = $row['total_pending'];

?>
<?php

// Connect to the database
$db = mysqli_connect("localhost", "root", "", "computer_db");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Count the total number of complaints
$query = "SELECT COUNT(*) as total_resolved FROM computer_forms WHERE status = 'Resolved'";
$r = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($r);
$total_resolved = $row['total_resolved'];
?>
<?php

// Connect to the database
$db = mysqli_connect("localhost", "root", "", "computer_db");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Count the total number of complaints
$query = "SELECT COUNT(*) as total_process FROM computer_forms WHERE status = 'In-Process'";
$process = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($process);
$total_process = $row['total_process'];

?>


<html>

<head>
    <link rel="stylesheet" href="assets/css/complaint.css">
    <link rel="stylesheet" href="assets/css/bootstrapp.min.css">
    <script src="../Mini Project/assets/js/submit.js"></script>
    <title>Complaint Listing Page</title>
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrapp.min.css">
    <title>User Data</title>
</head>
<?php
include('session-admin.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <!-- <link rel="stylesheet" href="../Mini Project/assets/css/style6.css"> -->
    <link rel="stylesheet" href="assets/css/user-admin.css">
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

    <body class="bg-dark">
        <div class="all-container">
            <div class="container-complaint">
                <div class="status">
                    <h2>Users Complaints</h2>
                    <p>Total Complaints: <?php echo $total; ?></p>
                    <p></p>
                </div>
            </div>
            <div class="container-resolved">
                <div class="status">
                    <h2>Resolved Complaints</h2>
                    <p>Resolved Complaints: <?php echo $total_resolved; ?></p>
                    <p></p>
                </div>
            </div>
            <div class="container-resolved">
                <div class="status">
                    <h2>Pending Complaints</h2>
                    <p>Pending Complaints: <?php echo $total_pending; ?></p>
                    <p></p>
                </div>
            </div>
            <div class="container-pending">
                <div class="status">
                    <h2>Processing Complaints</h2>
                    <p>In-Process Complaints: <?php echo $total_process; ?></p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <div class="card-body">
                                <h1 style="text-align: center;">Complaint List</h1>
                                <form class="delete-c" action="delete-complaint.php" method="POST">
                                    <label>Delete Complaint: </label>
                                    <input name="delete" placeholder="Enter Complaint ID:">
                                    <input type="submit" value="Submit" name="dbtn" id="button">
                                </form>
                                <form method="POST" action="filter.php">
                                    <label for="filter">Filter by:</label>
                                    <select name="filter" id="filter">
                                        <option value="all">All</option>
                                        <option value="latest">Latest</option>
                                    </select>
                                    <button type="submit" class="filter-btn">Filter</button>
                                </form>
                                <table class="table table-bordered text-center">
                                    <tr class="bg-dark text-white">
                                        <th>Complaint ID</th>
                                        <th>UserID</th>
                                        <th>Complaint</th>
                                        <th>Lab Name</th>
                                        <th>Status</th>
                                    </tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['complaint_id'] . "</td>";
                                        echo "<td>" . $row['userID'] . "</td>";
                                        echo "<td><center>" . $row['title'] . "</center></td>";
                                        echo "<td>" . $row['Q2'] . "</td>";
                                        echo "<td>" . $row['status'] ?>
                                        <form action="status.php" method="POST"><br>
                                            <label>Change Status :</label>
                                            <select name="status">
                                                <option value="Resolved">Resolved</option>
                                                <option value="Pending">Pending</option>
                                                <option value="In-Process">In-Process</option>
                                                <input type="hidden" name="complaint_id" value="<?php echo $row['complaint_id'] ?>">
                                                <input type="submit" value="Submit" name="state" id="button">
                                        </form> <?php "</td>";
                                            }   ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>

</html>