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
  $id = $_POST['id'];

  //delete data from database
  $query = "DELETE FROM qrcode WHERE qr_id='$id'";
  mysqli_query($con, $query);

  //redirect to homepage
  header("Location: retrive-admin.php");
}

mysqli_close($con);

?>
