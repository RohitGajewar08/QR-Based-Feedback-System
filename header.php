<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
  <script src="../Mini Project/assets/js/validation.js" defer></script>
  <title>OUR QR</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/Style.css">

</head>

<body>
  <!-- ***** Pre-Header Area Start ***** -->
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
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="Home.php" class="logo">
              <img src="assets/images/ourqr.png" alt="" style="width: 135px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="Generate.php" class="active">QR Code Generator</a></li>
              <li class="scroll-to-section"><a href="#">QR Code Scanner</a></li>
              <li class="scroll-to-section"><a href="faqs.php">FAQ</a></li>
              <li class="has-sub">
                <a>Manage</a>
                <ul class="sub-menu">
                  <li><a href="retrive.php">Your QR Code</a></li>
                  <li><a href="form-user.php">Submit Complaint</a></li>
                  <li><a href="complaint.php">Your Complaint</a></li>
                </ul>
              </li>
              <?php
              if (isset($_SESSION['userID'])) {
                echo "<li class='scroll-to-section'><a class='scroll-to-section'></a></li>";
              } else {
                echo "<li class='scroll-to-section'><a class='scroll-to-section' href='Signup.php'>Sign up</a></li>";
              }
              ?>
              <?php
              if (isset($_SESSION['userID'])) {
                echo "<li style='margin: 0px 0px 0px -60px;'><a >Logged in as: " . $_SESSION['userID'] . "</a></li>";
                echo "<li class='logout'><a class='logout' href='logout.php'>Logout</a></li>";
              } else {
                echo "<li class='scroll-to-section'><a class='scroll-to-section' href='Login.php'>Login</a></li>";
                echo "<li style='margin: 0px 0px 0px -12px;' ><a class='scroll-to-section' href='admin-login.php'>Admin Login</a></li>";
              }
              ?>
            </ul>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->