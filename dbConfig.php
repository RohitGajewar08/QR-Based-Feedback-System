

<?php
/*session_start();*/
$servername = "localhost";
$username = "root";
$password = "";
$database ="computer_db";

//create connection

$conn = mysqli_connect($servername,$username,$password,$database);
//check connectioin
if ($conn) {
}
else{
	die("connection faild:".mysqli_connect_error());
}
 ?>