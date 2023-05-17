<?php
$server = "Localhost";
$username = "root";
$password = "";
$database = "teacher_db";
$connection = mysqli_connect("$server", "$username", "$password");
$select_db = mysqli_select_db($connection, $database);
if(!$select_db)
{
    echo("connection Terminated");
}
?>
