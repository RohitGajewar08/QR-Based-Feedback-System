<?php

use PHPMailer\PHPMailer\PHPMailer;

$host = "localhost";
$dbname = "computer_db";
$username = "root";
$password = "";
$title = $_POST['title'];
$Q1 = $_POST['Q1'];
$Q2 = $_POST['Q2'];
$Q3 = $_POST['Q3'];
$Q4 = $_POST['Q4'];
$Q5 = $_POST['Q5'];
$Q6 = $_POST['Q6'];
$status = $_POST['status'];
$conn = mysqli_connect($host, $username, $password, $dbname);
include('session.php');
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "INSERT INTO computer_forms (userID, title, Q1, Q2, Q3, Q4, Q5, Q6, status) VALUES ('{$_SESSION["userID"]}','$title','$Q1', '$Q2', '$Q3', '$Q4', '$Q5', '$Q6', 'In-Process')";
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
<?php
include('session.php');
require './PHPMailer/src/PHPMailer.php';
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->auth_username = 'edu.pranavnarkhede@gmail.com';
$mail->auth_password = 'Manohar@Pranav@1';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
// The email address of the recipient
$to = '3423pranav@gmail.com';

// The subject of the email
$subject = 'Filled form data';

// The body of the email
$message = "UserID: " . $_SESSION['userID'] . "\n" ."\n" .
    "Here is the filled form data:\n" ."\n" .
    "Name of the Computer: " . $_POST['Q1'] . "\n" ."\n" .
    "Name of the lab: " . $_POST['Q2'] . "\n" ."\n" .
    "Describe the problem / error: " . $_POST['Q3'] . "\n" ."\n" .
    "Where does the problem occur? " . $_POST['Q4'] . "\n" ."\n" .
    "When did the problem occur? " . $_POST['Q5'] . "\n" ."\n" .
    "Under which conditions does the problem occur? " . $_POST['Q6'];

// Additional headers
$headers = 'From: edu.pranavnarkhede@gmail.com' . "\r\n" .
    'Reply-To: edu.pranavnarkhede@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Send the email
mail($to, $subject, $message, $headers);

?>