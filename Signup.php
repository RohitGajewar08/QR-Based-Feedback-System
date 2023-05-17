

<?php 
include("header.php");
include("session.php");
?>
  <!-- ***** Header Area End ***** -->
  <div class="Sign section" id="Sign">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="Sign-content">
            <div class="row">
              <div class="col-lg-4">
                <div id="map">
                  <img src="assets/images/info-logo.png" height="350">
                </div>
              </div>
              <div class="col-lg-8">
                <form id="Sign-form" action="process-signup.php" id="signup" method="post">
                  <div class="row">
                    <div class="col-lg-12"> 
                      <div class="section-heading">
                        <h2><em>Welcome</em> Aboard!</h2>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" name="userID" id="username" placeholder="Please enter userID" autocomplete="on" required>
                      </fieldset>
                    </div> 
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="password" id="password" name="password" placeholder=" Please enter Password" autocomplete="on"
                          required></input>
                      </fieldset>
                    </div>
                  </div>
                  <div>
                    <input type="checkbox" placeholder="Remind me" id="checkbox " style="width: 20px;">
                    <div id="m1">Receive Promotional Mails [Optional] </div>
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