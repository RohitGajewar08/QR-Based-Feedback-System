<?php
  session_start();
  if (isset($_POST['userID']) && isset($_POST['password'])) {
    // Perform login checks and process

    // If login is successful, store the username in the session
    $_SESSION['userID'] = $_POST['userID'];
  }
?>