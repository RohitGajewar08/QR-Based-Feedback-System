<?php

// Connect to the database
$db = mysqli_connect("localhost", "root", "", "computer_db");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Count the total number of complaints
$query = "SELECT COUNT(*) as total FROM computer_forms";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
$total = $row['total'];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>

<body>
    <header>
        <h1>Admin Dashboard</h1>
        <nav>
            <!-- Add your navigation links here -->
        </nav>
    </header>
    <main>
        <h2>Total Complaints</h2>
        <div id="total-complaints">
            <div>
                Total Complaints: <?php echo $total; ?>
            </div>
        </div>
    </main>
</body>

</html>