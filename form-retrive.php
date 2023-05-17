<?php
$host = "localhost";
$dbname = "computer_db";
$username = "root";
$password = "";

$connectQuery = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
    $selectQuery = "SELECT * FROM `computer_forms`";
    $result = mysqli_query($connectQuery, $selectQuery);
    if (mysqli_num_rows($result) > 0) {
    } else {
        $msg = "No Record found";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Computer Feedback</title>
  <link rel="stylesheet" href="assets/css/style_f.css">
</head>

<body>
  <h1>
    <center><em>Computer Feedback Form</em></center>
  </h1>
  <form action="form-db.php" method="post">

    <label for="question1">
      <h2>Name of the Computer:</h2>
     <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    </label><br>
    <input type="text" id="question1" name="Q1" maxlength="10" required placeholder="Computer Name..." <?php echo $row['Q1']  ?>><br>

    <label for="question2">
      <h2>Name of the lab:</h2>
    </label><br>
    <input type="text" id="question1" name="Q2" maxlength="10" required placeholder="Lab Name..."><br>

    <label for="question3">
      <h2>Describe the problem / error:</h2>
    </label><br>
    <textarea id="question2" name="Q3" rows="5" column="100" required placeholder="  Describe The Problem..."></textarea><br>

    <label for="question4">
      <h2>Where does the problem occur?</h2>
    </label><br>
    <input type="text" id="question3" name="Q4" maxlength="10" required><br>

    <label for="question5">
      <h2>When did the problem occur?</h2>
    </label><br>
    <input type="date" id="question4" name="Q5" required><br>

    <label for="question6">
      <h2>Under which conditions does the problem occur?</h2>
    </label><br>
    <input type="text" id="question5" name="Q6" maxlength="10" required><br>
     <?php } ?>

    <input type="submit" value="Submit" id="button">
  </form>
</body>

</html>

<?php

// The email address of the recipient
$to = '3423pranav@gmail.com';

// The subject of the email
$subject = 'Filled form data';

// The body of the email
$message = "Here is the filled form data:\n" . 
           "Name of the Computer: " . $_POST['Q1'] . "\n" .
           "Name of the lab: " . $_POST['Q2'] . "\n" .
           "Describe the problem / error: " . $_POST['Q3']. "\n" .
           "Where does the problem occur? " . $_POST['Q4']. "\n" .
           "When did the problem occur? " . $_POST['Q5']. "\n" .
           "Under which conditions does the problem occur? " . $_POST['Q6'];

// Additional headers
$headers = 'From: pranavnarkhede3423@gmail.com' . "\r\n" .
           'Reply-To: pranavnarkhede3423@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Send the email
mail($to, $subject, $message, $headers);
?>
