<?php

// Connect to the database
$db = mysqli_connect("localhost", "root", "", "computer_db");

// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<?php
// Count the total number of complaints for WEB TECH LAB
$query = "SELECT COUNT(*) as total_web FROM computer_forms WHERE Q2 = 'Web Tech'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);
$total_web = $row['total_web'];
?>

<?php
// Count the total number of resolved complaints for Web Tech Lab
$query = "SELECT COUNT(*) as total_res FROM computer_forms WHERE Q2 = 'Web Tech' AND status = 'Resolved'";
$resul = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($resul);
$total_res = $row['total_res'];
?>
<?php
// Count the total number of In Process complaints for Web Tech Lab
$query = "SELECT COUNT(*) as total_pro FROM computer_forms WHERE Q2 = 'Web Tech' AND status = 'In-Process'";
$resu = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($resu);
$total_pro = $row['total_pro'];
?>
<?php
// Count the total number of In Process complaints for Web Tech Lab
$query = "SELECT COUNT(*) as total_pen FROM computer_forms WHERE Q2 = 'Web Tech' AND status = 'Pending'";
$res = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($res);
$total_pen = $row['total_pen'];
?>
<!-- ----------------------------------------------------------- -->
<?php
// Count the total number of complaints for WEB TECH LAB
$query = "SELECT COUNT(*) as total_cn FROM computer_forms WHERE Q2 = 'Computer Networks'";
$re = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($re);
$total_cn = $row['total_cn'];
?>
<?php
// Count the total number of resolved complaints for Web Tech Lab
$query = "SELECT COUNT(*) as total_cn_res FROM computer_forms WHERE Q2 = 'Computer Networks' AND status = 'Resolved'";
$r = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($r);
$total_cn_res = $row['total_cn_res'];
?>
<?php
// Count the total number of In Process complaints for Web Tech Lab
$query = "SELECT COUNT(*) as total_cn_pro FROM computer_forms WHERE Q2 = 'Computer Networks' AND status = 'In-Process'";
$a = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($a);
$total_cn_pro = $row['total_cn_pro'];
?>
<?php
// Count the total number of In Process complaints for Web Tech Lab
$query = "SELECT COUNT(*) as total_cn_pen FROM computer_forms WHERE Q2 = 'Computer Networks' AND status = 'Pending'";
$b = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($b);
$total_cn_pen = $row['total_cn_pen'];
?>
<!-- ----------------------------------------------- -->
<?php
// Count the total number of complaints for WEB TECH LAB
$query = "SELECT COUNT(*) as total_cc FROM computer_forms WHERE Q2 = 'Computer Center'";
$c = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($c);
$total_cc = $row['total_cc'];
?>
<?php
// Count the total number of resolved complaints for Web Tech Lab
$query = "SELECT COUNT(*) as total_cc_res FROM computer_forms WHERE Q2 = 'Computer Center' AND status = 'Resolved'";
$d = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($d);
$total_cc_res = $row['total_cc_res'];
?>
<?php
// Count the total number of In Process complaints for Web Tech Lab
$query = "SELECT COUNT(*) as total_cc_pro FROM computer_forms WHERE Q2 = 'Computer Center' AND status = 'In-Process'";
$e = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($e);
$total_cc_pro = $row['total_cc_pro'];
?>
<?php
// Count the total number of In Process complaints for Web Tech Lab
$query = "SELECT COUNT(*) as total_cc_pen FROM computer_forms WHERE Q2 = 'Computer Center' AND status = 'Pending'";
$f = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($f);
$total_cc_pen = $row['total_cc_pen'];
?>
<html>
  <head>
    <title>Lab Statistics</title>
  <link rel="stylesheet" type="text/css" href="../Mini Project/assets/css/stats.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <link rel="stylesheet" href="assets/css/bootstrapp.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <link rel="stylesheet" href="assets/css/user-admin.css">
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
<body>
  <canvas id="pie-lab"></canvas>
  <script>
    var ctx = document.getElementById('pie-lab').getContext('2d');
    // define the data for the pie chart
    var data = {
      labels: ['Web Tech Complaints', 'Computer Center Complaints', 'Computer Network Complaints'], // labels for the slices
      datasets: [{
        data: [<?php echo $total_web ?>, <?php echo $total_cc ?>, <?php echo $total_cn ?>], // data for each slice
        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'], // colors for each slice
        hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
      }]
    };
    // create the pie chart
    var Pie = new Chart(ctx, {
      type: 'pie',
      data: data,
      options: {
        responsive: false,
        maintainAspectRatio: false
      }
    });
  </script>
  <canvas id="pie-lab-res"></canvas>
  <script>
    var ctx = document.getElementById('pie-lab-res').getContext('2d');
    // define the data for the pie chart
    var data = {
      labels: ['Web Tech Resolved Complaints', 'Computer Center Resolved Complaints', 'Computer Network Resolved Complaints'], // labels for the slices
      datasets: [{
        label: 'Resolved Complaints',
        data: [<?php echo $total_res ?>, <?php echo $total_cc_res ?>, <?php echo $total_cn_res ?>], // data for each slice
        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'], // colors for each slice
        hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
      }]
    };
    // create the pie chart
    var Pie = new Chart(ctx, {
      type: 'bar',
      data: data,
      options: {
        responsive: false,
        maintainAspectRatio: false
      }
    });
  </script>
  <canvas id="pie-lab-pen"></canvas>
  <script>
    var ctx = document.getElementById('pie-lab-pen').getContext('2d');

    // define the data for the pie chart
    var data = {
      labels: ['Web Tech Pending Complaints', 'Computer Center Pending Complaints', 'Computer Network Pending Complaints'],
      datasets: [{
        label: 'Pending Complaints',
        data: [<?php echo $total_pen ?>, <?php echo $total_cc_pen ?>, <?php echo $total_cn_pen ?>],
        borderColor: 'rgba(68, 59, 255, 0.9)',
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
      }]
    };
    // create the pie chart
    var data = new Chart(ctx, {
      type: 'line',
      data: data,
      options: {
        responsive: false,
        maintainAspectRatio: false
      }
    });
  </script>
  <h1>Lab Statistics</h1>
  <body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Lab Stats</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td>Lab</td>
                  <td>Total Complaints</td>
                  <td>Complaints Resolved</td>
                  <td>Complaints In-Process</td>
                  <td>Complaints Pending</td>
                </tr>
                <tr>
                  <td>Web Tech Lab</td>
                  <td><?php echo $total_web ?></td>
                  <td><?php echo $total_res ?></td>
                  <td><?php echo $total_pro ?></td>
                  <td><?php echo $total_pen ?></td>
                </tr>
                <tr>
                  <td>Computer Networks Lab</td>
                  <td><?php echo $total_cn ?></td>
                  <td><?php echo $total_cn_res ?></td>
                  <td><?php echo $total_cn_pro ?></td>
                  <td><?php echo $total_cn_pen ?></td>
                </tr>
                <tr>
                  <td>Computer Center</td>
                  <td><?php echo $total_cc ?></td>
                  <td><?php echo $total_cc_res ?></td>
                  <td><?php echo $total_cc_pro ?></td>
                  <td><?php echo $total_cc_pen ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>