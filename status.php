<?php
use PHPMailer\PHPMailer\PHPMailer;

//connect to database
$con = mysqli_connect("localhost", "root", "", "computer_db");
include('session.php');

//check if connection was successful
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//check if download button was clicked
if (isset($_POST['state'])) {
  //get data from form
  $id = $_POST['complaint_id'];
  $status = $_POST['status'];
  
  //delete data from database
  $query = "UPDATE computer_forms
            SET status = '$status'
            WHERE complaint_id = '$id'";
mysqli_query($con, $query);

  //redirect to homepage
  header("Location: retrive_complaint.php");
}

mysqli_close($con);

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
$subject = 'Complaint Status Updated';

// The body of the email
$message = "Hey user" ."\n" ."\n" .
    "Your Complaint Status has been updated"."\n" ."\n" .
    "Please check the status"."\n" ."\n" ."\n" ."\n" .
    "Please do contact us if your complaint hasn't been resolved";


// Additional headers
$headers = 'From: edu.pranavnarkhede@gmail.com' . "\r\n" .
    'Reply-To: edu.pranavnarkhede@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Send the email
mail($to, $subject, $message, $headers);

?>