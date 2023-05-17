<?php

//connect to database
$con = mysqli_connect("localhost", "root", "", "computer_db");

//check if connection was successful
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//check if download button was clicked
if (isset($_POST['delete'])) {
  //get data from form
  $complaint_id = $_POST['delete'];

  
  $result = $con->query("SELECT * FROM computer_forms WHERE complaint_id = $complaint_id");
  if (!$result) {
    die('Error: ' . $con->error);
}

$complaint = $result->fetch_assoc();
$result = $con->query("INSERT INTO complaint_archive (complaint_id, userID, title, Q1, Q2, Q3, Q4, Q5, Q6, status) VALUES ({$complaint['complaint_id']}, '{$complaint['userID']}','{$complaint['title']}', '{$complaint['Q1']}', '{$complaint['Q2']}', '{$complaint['Q3']}', '{$complaint['Q4']}', '{$complaint['Q5']}', '{$complaint['Q6']}', '{$complaint['status']}')");

if (!$result) {
  die('Error: ' . $con->error);
}
  //delete data from database
  $result = $con->query("DELETE FROM computer_forms WHERE complaint_id = $complaint_id");
  if (!$result) {
    die('Error: ' . $con->error);
}
  //redirect to homepage
  header("Location: retrive_complaint.php");
}

mysqli_close($con);

?>
