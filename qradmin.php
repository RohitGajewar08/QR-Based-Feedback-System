<?php
require_once 'connection.php';
require_once 'phpqrcode/qrlib.php';
$link = $_POST['link'];
$date = $_POST['date'];
$compNo = $_POST['compNo'];
$labName = $_POST['labName'];

$path = 'images/';
$qrcode = $path . uniqid() . time().'.png';
?>
<?php
include('session-admin.php');
?>
<?php
$adminID = $_SESSION['adminID'];
$mysqli = new mysqli("localhost", "root", "", "computer_db");
$ecc = 'L';

$query="insert into computers(link,date,compNo,labName,qrImage,adminID) values ('$link','$date','$compNo','$labName','$qrcode', '$adminID')";
$encoded_link = htmlspecialchars($link);
if ($mysqli->query($query)==true)
{
    QRCode :: png($link, $qrcode, $ecc, 8, 8);
    ?>
    <script> 
    alert("Data Saved Successfully");
    </script>
    <?php
}
else {
    ?>
    <script>
     alert("Data Saving Failed");
    </script>
    <?php
}
echo "<p style='position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
box-shadow: 0 0px 10px rgb(186 10 255);
border-radius: 80px;'>"."<img src ='".$qrcode."'>"."</p>";
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
<div class="main-content">
	<p class="main" data-lead-id="main-content-a">OUR QR | EVERYTHING IN ONE</p>
</div>

    <header>
	<img class="left-banner" src="../Mini Project/assets/images/images-top.png">

	<img class="l-banner" src="../Mini Project/assets/images/banner-left-1.png">
	<img class="l-banner" src="../Mini Project/assets/images/banner-left-1.png">
    <img class="r-banner" src="../Mini Project/assets/images/banner-left.png">
	<img class="r-banner" src="../Mini Project/assets/images/banner-left.png">
        <img class="right-banner" src="../Mini Project/assets/images/images-bottom.png">
    </header>


</body>
