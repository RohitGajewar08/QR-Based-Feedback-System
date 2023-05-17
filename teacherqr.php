<?php
// Include the PHP QR Code library
require_once 'phpqrcode/qrlib.php';
include('session-teacher.php');
date_default_timezone_set('Asia/Kolkata');
$id = $_POST['id'];
$db = mysqli_connect("localhost", "root", "", "teacher_db");
$query = "SELECT url FROM links WHERE id = $id";
$result = mysqli_query($db, $query);
$link = mysqli_fetch_assoc($result)['url'];
//-------------------------------
$path = 'images/';
$qrimage = time() . ".png";
$timestamp = time();
$date = date("Y-m-d H:i:s", $timestamp);
$teacherID = $_SESSION['teacherID'];
$qrcode = $path . uniqid() . '.png';

$ecc = 'L';
QRcode::png($link, $qrcode, $ecc, 8, 8);
$conn = mysqli_connect("localhost", "root", "", "teacher_db");
$stmt = $conn->prepare('INSERT INTO qrcode_teacher (linkID,url,created_at,qrImage,teacherID) VALUES (?,?,?,?,?)');
$stmt->bind_param('issss', $id, $link, $date, $qrimage, $teacherID);
$stmt->execute();
echo "<p style='position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
box-shadow: 0 0px 10px rgb(186 10 255);
border-radius: 80px;'>" . "<img src ='" . $qrcode . "'>" . "</p>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>QR CODE</title>
    <link rel="stylesheet" href="assets/css/style-bg.css">
    <link rel="stylesheet" href="assets/css/style4.css">
</head>

<body>
    <form action="delete_teacherqr.php" method="POST" style="position: absolute;bottom: 95px;">
        <input type="submit" value="Delete" name="delete" id="button"rborder-radius: 17px; margin-left: 670px;">
    </form>
    <div class="main-content">
        <p class="main" data-lead-id="main-content-a">OUR QR | EVERYTHING IN ONE</p>
    </div>
    <header>
        <img class="left-banner" src="../Mini Project/assets/images/images-top.png">
        <img class="l-banner" src="../Mini Project/assets/images/banner-left-1.png">
        <img class="l-banner" src="../Mini Project/assets/images/banner-left-1.png">
        <img class="r-banner" src="../Mini Project/assets/images/banner-left.png">
        <img class="r-banner" src="../Mini Project/assets/images/banner-left.png">
        <img class="right-banner" src="../Mini Project/assets/images/images-bottom.png" style="padding: 750px 35px 80px 60px;">
    </header>
</body>