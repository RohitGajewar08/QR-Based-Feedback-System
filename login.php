<?php
session_start();
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE userID = '%s'",
                   $mysqli->real_escape_string($_POST["userID"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["user_id"];
            $_SESSION['userID'] = $user["userID"];
            
            header("Location: index.php");
            exit;
        }
    } 
    
    $is_invalid = true;
}
session_abort();

?>
<?php
  session_start();
  if (isset($_POST['userID']) && isset($_POST['password'])) {
    // Perform login checks and process

    // If login is successful, store the username in the session
    $_SESSION['userID'] = $_POST['userID'];
  }
?>
<?php
include("header.php")
?>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="Home.php" class="logo">
              <img src="assets/images/ourqr.png" alt="" style="max-width: 112px;">
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
                  <li><a href="Generate.php">Create QR Code </a></li>
                  <li><a href="retrive.php">Your QR Code</a></li>
                </ul>
              </li>
              <li class="scroll-to-section"><a href="Signup.php">Sign Up</a></li>
              <?php
              if (isset($_SESSION['userID'])) {
                echo "<li class='scroll-to-section'><a class='scroll-to-section' href='logout.php'>Logged in as: " . $_SESSION['userID'] . "</a></li>";
              } else {
                echo "<li class='scroll-to-section'><a class='scroll-to-section' href='Home.php'>Home</a></li>";
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
                <form id="Login-form" action="login.php" method="post">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-heading">
                        <h2><em>Welcome</em> Back!</h2>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" name="userID" id="username" placeholder="Enter Your userID..." autocomplete="on"
                          required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="password" id="password" placeholder=" Password" name="password" autocomplete="on" required></input>
                      </fieldset>
                    </div>
                    <div>
                      <input type="checkbox" placeholder="Remind me" id="checkbox "style="width: 20px;">
                      <div id="m1">Remember me </div>
                    </div>
                    <div id="m2"><strong> Forgot password?</strong></div>
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











