<?php
  session_start();
  if (isset($_POST['adminID']) && isset($_POST['password'])) {
    // Perform login checks and process

    // If login is successful, store the username in the session
    $_SESSION['adminID'] = $_POST['adminID'];
  }
?>