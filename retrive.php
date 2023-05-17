<?php
$host = "localhost";
$dbname = "computer_db";
$username = "root";
$password = "";

$connectQuery = mysqli_connect($host, $username, $password, $dbname);
include('session.php');
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
    $selectQuery = "SELECT * FROM `qrcode` WHERE userID = '{$_SESSION["userID"]}' ";
    $result = mysqli_query($connectQuery, $selectQuery);
    if (mysqli_num_rows($result) > 0) {
    } elseif (!mysqli_num_rows($result) > 0) {
        header("location: empty.php");
    }
}

if (!isset($_SESSION['userID'])) {
    header("location: entry.php");
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
            <h3 class="m3-bar-item">Menu</h3>
            <a href="Home.php" class="m3-button1">Home</a><br><br>
            <a href="Generate.php" class="m3-button2">Generate QR</a><br><br>
            <a href="faqs.php" class="m3-button3">FAQ</a>
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
                <br>
                <p id="name"><strong> <?php echo $row['qrText'] ?></strong></p>
                <a1 id="date"> <?php echo $row['qrText'] ?></a1>
                <br>
                <a2 id="link"> <?php echo $row['qrText'] ?></a2>
            </div>
            <form method="POST" action="#">
                <input type="submit" value="Download" id="dbtn">
            </form>


        </div>
    <?php } ?>

    </table>
</body>

</html>