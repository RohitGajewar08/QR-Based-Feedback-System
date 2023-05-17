<?php
  session_start();
  if (isset($_POST['teacherID']) && isset($_POST['password'])) {
    // Perform login checks and process

    // If login is successful, store the username in the session
    $_SESSION['teacherID'] = $_POST['teacherID'];
  }
?>