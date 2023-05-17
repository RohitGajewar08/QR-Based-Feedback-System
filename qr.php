
<?php
require_once 'connection.php';
require_once 'phpqrcode/qrlib.php';
$qrText = $_POST['qrText'];
$path = 'images/';
$qrcode = $path . uniqid() . time().'.png';
$qrimage = time().".png";

$mysqli = new mysqli("localhost", "root", "", "computer_db");?>
<?php
include('session.php');
?>
<?php
$userID = $_SESSION['userID'];
$conn = new mysqli("localhost", "root", "", "computer_db");
$ecc = 'L';
// $qrimage = str_replace('data:image/png;base64,', '', $qrcode);
$query="insert into qrcode(qrText,qrImage,userID) values ('$qrText','$qrcode','$userID')";
if ($mysqli->query($query)==true)
{
    QRCode :: png($qrText, $qrcode, $ecc, 8, 8);
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
