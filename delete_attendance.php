<?php

// Connect to the database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "teacher_db";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve all rows from the source table
$sql = "SELECT * FROM attendance";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Loop through the result set and insert each row into the target table
    while($row = mysqli_fetch_assoc($result)) {
        $sql = "INSERT INTO total_attendance (id, date, name, roll, prn) VALUES ('" . $row['id'] . "', '" . $row['date'] . "', '" . $row['name'] . "', '" . $row['roll'] . "', '" . $row['prn'] . "')";
        mysqli_query($conn, $sql);
    }
}

// Delete the rows from the source table
$sql = "DELETE FROM attendance";
mysqli_query($conn, $sql);

mysqli_close($conn);

?>