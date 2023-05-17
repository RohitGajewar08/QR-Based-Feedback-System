<?php
$db = mysqli_connect('localhost', 'root', '', 'computer_db');
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT userID FROM user";
$result = mysqli_query($db, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrapp.min.css">
  <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/user-admin.css">
  <title>User Data</title>
</head>
<?php
include('session-admin.php');
?>
<body>
    <header class="head">
        <nav>
            <div>
                <ul>
                    <li><a href="admin_home.php">Home</a></li>
                    <li><a href="retrive_complaint.php">Users Complaints</a></li>
                    <li><a href="admin-generate.php">Qr Code Generator</a></li>
                    <li><a href="retrive-admin.php">QR Codes</a></li>
                    <li><a href="stats.php">Stastics</a></li>
                </ul>
            </div>
            <h1>
                <center>Admin Dashboard</center>
            </h1>
            <div id="echo">
                <?php
                if (isset($_SESSION['adminID'])) {
                    echo "<h2 ><a >Logged in as: " . $_SESSION['adminID'] . "</a></li>"; ?>
            </div>
            <div>
            <?php echo "<h2 class='logout'><a href='logout.php'>Logout</a></li>";
                } else {
                    echo "<h2 style='margin-right: 280px;'><a href='admin-login.php'>Admin Login</a></li>";
                }
            ?>
            </div>
        </nav>
    </header>

<body class="bg-dark">
  <div class="container">
    <div class="row mt-5">
      <div class="col">
        <div class="card mt-5">
          <div class="card-header">
            <h2 class="display-6 text-center">User Data</h2>
          </div>
          <div class="card-body">
            <table class="table table-bordered text-center">
              <tr class="bg-dark text-white">
                <td>Users</td>
                <td>Total QR Codes</td>
                <td>Total Complaint</td>
                <td>Complaints Resolved</td>
              </tr>
              <tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                  $userID = $row['userID'];
                  $item_query = "SELECT COUNT(*) FROM qrcode WHERE userID = '$userID'";
                  $item_result = mysqli_query($db, $item_query);
                  $item_count = mysqli_fetch_array($item_result)[0];

                  $complaint_query = "SELECT COUNT(*) FROM computer_forms WHERE userID = '$userID'";
                  $complaint_result = mysqli_query($db, $complaint_query);
                  $complaint_count = mysqli_fetch_array($complaint_result)[0];

                  $complaint_res_query = "SELECT COUNT(*) FROM computer_forms WHERE userID = '$userID' AND status = 'Resolved'";
                  $complaint_res_result = mysqli_query($db, $complaint_res_query);
                  $complaint_res_count = mysqli_fetch_array($complaint_res_result)[0];

                ?>
                  <td><?php echo $row['userID']?></td>
                  <td><?php echo $item_count?></td>
                  <td><?php echo $complaint_count?></td>
                  <td><?php echo $complaint_res_count?></td>
                  <td><a href="#" class="btn btn-danger">Delete</a></td>
              </tr>
            <?php
                }

            ?>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>