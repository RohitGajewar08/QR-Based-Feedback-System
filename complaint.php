<?php
include('session.php');
if (isset($_SESSION['userID'])) {
}else {
    header("location: entry.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR CODES</title>
    <link rel="stylesheet" href="assets/css/Style5.css">
    <title>Complaint Listing Page</title>
    <style>
        /* Add your CSS styling here */
        table {
            border-collapse: collapse;
          
            margin: 45px 175px 45px 470px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            width: 10%;
        }
        h1{
            margin: 45px 175px 45px 470px;
        }
    </style>
</head>

<body>
    <header>

        <div class="m3-sidebar m3-light-grey m3-bar-block">
            <div>
                <a href="Home.php" class="log1">
                    <img src="assets/images/ourqr.png" alt="" style="height: 80px;">
                </a>
            </div>
            <h3 class="m3-bar-item">Menu</h3>
            <a href="Home.php" class="m3-button1">Home</a><br><br>
            <a href="Generate.php" class="m3-button2">Generate QR</a><br><br>
            <a href="faqs.php" class="m3-button3">FAQ</a>
        </div>
    </header>
    <img class="r-banner" style="background-repeat: repeat-y;" src="../Mini Project/assets/images/banner-left.png">
    <img class="r-banner" style="background-repeat: repeat-y;" src="../Mini Project/assets/images/banner-left.png">
    <img class="r-banner2" style="background-repeat: repeat-y;" src="../Mini Project/assets/images/banner-left.png">
    <img class="r-banner2" style="background-repeat: repeat-y;" src="../Mini Project/assets/images/banner-left.png">


<body>
    <h1>Complaint List</h1>
    <table>
        <tr>
            <th>Complaint ID</th>
            <th>UserID</th>
            <th>Complaint</th>
            <th>Lab Name</th>
            <th>Status</th>
        </tr>
        <?php
        // Connect to the database
        $db = new mysqli('localhost', 'root', '', 'computer_db');

        // Query the database for the list of complaints
        $query = "SELECT * FROM computer_forms WHERE userID = '{$_SESSION["userID"]}' ";
        $result = $db->query($query);

        // Loop through the results and create a row in the table for each complaint
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['complaint_id']. "</td>";
            echo "<td>".$row['userID']. "</td>";
            echo "<td>".$row['title']. "</td>";
            echo "<td>".$row['Q2']. "</td>";

            // Determine the status of the complaint
            if ($row['status'] == 'Pending') {
                $status = 'Pending';
            } else if ($row['status'] == 'Resolved') {
                $status = 'Resolved';
            } else {
                $status = 'In-Process';
            }
            echo "<td>" . $status . "</td>";

            echo "</tr>";
        }
        ?>
    </table>
</body>

</html> 	
