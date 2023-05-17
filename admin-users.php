<?php

// Connect to the first database
$link1 = mysqli_connect('localhost', 'root', '', 'computer_db');

// Connect to the second database
$link2 = mysqli_connect('localhost', 'root', '', 'computer_db');

// Build the SQL query to execute on the first database
$query1 = "SELECT userID, COUNT(*) AS total_complaints
FROM computer_forms
GROUP BY user_id";
$total_complaints = $row['total_complaints'];

// Build the SQL query to execute on the second database
$query2 = "SELECT userID, COUNT(*) AS total_qr
FROM qrcode
GROUP BY user_id";
$total_qr = $row['total_qr'];

// Execute both queries in a single call
mysqli_multi_query($link1, $query1 . ";" . $query2);

// Get the first result set
$result1 = mysqli_store_result($link1);

// Get the second result set
$result2 = mysqli_store_result($link1);

// Loop through the first result set and output the data
while ($row = mysqli_fetch_assoc($result1)) {
    echo $row['total_complaints'] ."<br>";
}

// Loop through the second result set and output the data
while ($row = mysqli_fetch_assoc($result2)) {
    echo $row['total_qr'] ."<br>";
}

// Close the connections
mysqli_close($link1);
mysqli_close($link2);
