<?php
$is_invalid = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
    $mysqli = require __DIR__ . "/database-teacher.php";
    
    $sql = sprintf("SELECT * FROM login
                    WHERE teacherID = '%s'",
                   $mysqli->real_escape_string($_POST["teacherID"]));
    
    $result = $mysqli->query($sql);
    
    $login = $result->fetch_assoc();
    
    if ($login) {
        
        if ( $login["password"] == $_POST['password']) {
            
            session_start();
            
            session_regenerate_id();
            $_SESSION['teacherID'] = $login["teacherID"];
            header("Location: teacher-home.php");
            exit;
        }
    } 
    
    $is_invalid = true;
}
session_abort();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
  <script src="../Mini Project/assets/js/validation.js" defer></script>
  <title>OUR QR</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/Style.css">
</head>
<body>
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="#">012-345-678</a></li>
              <li><a href="#">infocompany@email.com</a></li>
              <li><a href="#">Wardha, India</a></li>
              <li><a href="#contact">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="Home.php" class="logo">
              <img src="assets/images/ourqr.png" alt="" style="max-width: 145px;width: 120px;">
            </a>
            <div class="admin">
            <h1 >Teacher Login </h1>
            </div>
  </header>
    <div class="Login section" id="Login">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="Login-content">
            <div class="row">
              <div class="col-lg-4">
                <div id="map">
                  <img src="assets/images/info-logo.png" height="350">
                </div>
              </div>
              <div class="col-lg-8">
                <form id="Login-form" action="teacher-login.php" method="post">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-heading">
                        <h2><em>Welcome</em> Back!</h2>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" name="teacherID" id="adminID" placeholder="Enter Your teacherID..." autocomplete="on"
                          required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="password" id="password" placeholder=" Password" name="password" autocomplete="on" required></input>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button"><strong>Login</strong></button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>

