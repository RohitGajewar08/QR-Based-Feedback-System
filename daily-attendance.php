<?php
$db = mysqli_connect('localhost', 'root', '', 'teacher_db');
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT * FROM attendance
          ORDER BY roll ASC";
$result = mysqli_query($db, $query);

$date_query = "SELECT date as date FROM attendance";
$resul = mysqli_query($db,$date_query);
$row = mysqli_fetch_assoc($resul);
$date = $row['date'];


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
include('session-teacher.php');
?>
<body>
    <header class="head">
        <nav>
            <div>
                <ul>
                    <li><a href="teacher-home.php">Home</a></li>
                    <li><a href="daily-attendance.php">Daily Attendance</a></li>
                    <li><a href="#">Overall Attendance</a></li>
                </ul>
            </div>
            <h1>
                <center>Admin Dashboard</center>
            </h1>
            <div id="echo">
                <?php
                if (isset($_SESSION['teacherID'])) {
                    echo "<h2 ><a >Logged in as: " . $_SESSION['teacherID'] . "</a></li>"; ?>
            </div>
            <div>
            <?php echo "<h2 class='logout'><a href='logout.php'>Logout</a></li>";
                } else {
                    echo "<h2 style='margin-right: 280px;'><a href='teacher-login.php'>Teacher Login</a></li>";
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
            <h2 class="display-6 text-center">Daily Attendance <?php echo $date ?></h2>
          </div>
          <div class="card-body">
            <table class="table table-bordered text-center">
              <tr class="bg-dark text-white">
                <td>Name</td>
                <td>Roll No</td>
                <td>PRN</td>
              </tr>
              <tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['roll'] ?></td>
                  <td><?php echo $row['prn'] ?></td>
              </tr>
            <?php
                }

            ?>
            

            </table>
            <form action="delete_attendance.php" method="POST" >
                <center><input type="submit" value="Submit" name="submit" id="button" style="width: 187px;height: 42px; border-radius: 12px;"></center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>