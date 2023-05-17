<?php
if (isset($_POST['filter'])) {

    $filter = $_POST['filter'];

    // Connect to the database
    $connection = mysqli_connect("localhost", "root", "", "computer_db");
if ($filter = "all") {
    header("location: retrive_complaint.php");
}
}
?>