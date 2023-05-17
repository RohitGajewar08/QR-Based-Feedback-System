<?php

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the submitted username and password
  $userID = $_POST['userID'];
  $password = $_POST['password'];

  // Validate the submitted data
  if (empty($userID)) { ?>
    <script>
        alert("Please enter a userID");
        document.location='Signup.php';
      </script>

    <?php
  } elseif (empty($password)) { ?>
    <script>
        alert("Please enter a password");
        document.location='Signup.php';
      </script>

    <?php
  } else {
    // Connect to the database
    $dbc = mysqli_connect('localhost', 'root', '', 'computer_db');

    // Check if the username is already taken
    $query = "SELECT * FROM user WHERE userID = '$userID'";
    $result = mysqli_query($dbc, $query);
    if (mysqli_num_rows($result) > 0) { ?>
      <script>
        alert("userID is already taken");
        document.location='Signup.php';
      </script>
<?php
    } else {
      // Hash the password
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      // Insert the new user into the database
      $query = "INSERT INTO user (userID, password) VALUES ('$userID', '$hashed_password')";
      mysqli_query($dbc, $query);

      // Redirect to the login page
      header('Location: congrats.php');
      exit;
    }
  }
}

?>