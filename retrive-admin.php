<?php
include('session-admin.php');
if (isset($_SESSION['adminID'])) {
} else {
    header("location: entry-admin.php");
}
?>

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
    $selectQuery = "SELECT * FROM `qrcode`";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR CODES</title>
    <link rel="stylesheet" href="assets/css/Style5.css">

</head>

<body>
    <header>

        <div class="m3-sidebar m3-light-grey m3-bar-block">
            <div>
                <a href="Home.php" class="log1">
                    <img src="assets/images/ourqr.png" alt="" style="height: 80px;">
                </a>
            </div>
            <h3 class="m3-bar-item">Menu</h3><br>
            <div style="text-align: center;margin-right: 95px;font-size: 20px;">
                <a href="admin_home.php" class="m3-button1">Home</a><br><br>
                <a href="admin-generate.php" class="m3-button2">Generate QR</a><br><br>
                <a href="retrive_complaint.php" class="m3-button3">User Complaints</a><br><br>
                <a href="retrive-computer.php" class="m3-button3">Computers</a>
            </div>
        </div>
        <div class="form">
            <form action="delete.php" method="post">
                <input type="text" name="id" id="qrid" placeholder="      Enter ID">
                <input type="submit" name="delete" id="delete" value="Delete">
            </form>
        </div>
    </header>
    <img class="r-banner" style="background-repeat: repeat-y;" src="../Mini Project/assets/images/banner-left.png">
    <img class="r-banner" style="background-repeat: repeat-y;" src="../Mini Project/assets/images/banner-left.png">
    <img class="r-banner2" style="background-repeat: repeat-y;" src="../Mini Project/assets/images/banner-left.png">
    <img class="r-banner2" style="background-repeat: repeat-y;" src="../Mini Project/assets/images/banner-left.png">

    <?php
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="container1">

            <img src='<?php echo $row['qrImage'];  ?>' width="250px" height="250px" ;>

            <div>
                <p id="qr"><strong>QR ID : <?php echo "<p id='qr' style= 'margin: -35px 0px 0px 111px;text-decoration: underline;'>" . $row['qr_id'] ?></strong></p>
                <p id="qrtext"><strong>QR Value : <strong> <?php echo $row['qrText'] ?></strong></p>
                <p id="user_id"><strong>Generated By: <?php echo $row['userID'] ?></strong></p>
            </div>
        </div>
    <?php } ?>

    </table>
</body>

</html>