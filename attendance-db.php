<?php

$host = "localhost";
$dbname = "teacher_db";
$username = "root";
$password = "";
$name = $_POST['name'];
$roll = $_POST['roll'];
$prn = $_POST['prn'];
$date = date('Y-m-d');
$conn = mysqli_connect($host, $username, $password, $dbname);
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "INSERT INTO attendance (name,date,roll, prn) VALUES ('$name','$date','$roll', '$prn')";
if ($conn->query($query) == true) {
?>
    <script>
        alert("Data Saved Successfully");
    </script>   
<?php
    header("location: Home.php");
} else {
?>
    <script>
        alert("Data Saving Failed");
    </script>
<?php
    header('location: Home.php');
}
?>