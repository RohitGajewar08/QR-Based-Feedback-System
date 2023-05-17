<?php 
include("session.php");
include("header.php");
?>
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 align-self-center">
          <div class="caption  header-text">
            <h6>OUR QR CODES</h6>
            <div class="line-dec"></div>
            <h4>Most Frequently Asked <em>Questions ?</em></h4>
          </div>
        </div>
        <div class="col-lg-5">
          <img src="assets/images/faqs-image.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="happy-steps">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Create QR for specified types</h2>
        </div>
        <div class="col-lg-12">
          <div class="steps">
            <div class="row">
              <div class="col-lg-3">
                <div class="item">
                  <img src="assets/images/1.png" alt="" style="max-width: 66px; border-radius: 50%; margin: 0 auto;">
                  <h4>URL</h4>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="item">
                  <img src="assets/images/2.png" alt="" style="max-width: 66px; border-radius: 50%; margin: 0 auto;">
                  <h4>WIFI</h4>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="item">
                  <img src="assets/images/5.png" alt="" style="max-width: 66px; border-radius: 50%; margin: 0 auto;">
                  <h4>WHATSAPP</h4>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="item last-item">
                  <img src="assets/images/7.PNG" alt="" style="max-width: 66px; border-radius: 50%; margin: 0 auto;">
                  <h4>TEXT</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="most-asked section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Most <em>Frequently</em> Asked <span>Questions</span> ?</h2>
            <div class="line-dec"></div>
            <p>Below we have collected answers to questions that you may have.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
              <div class="accordion-head">
                  <span>Does the QR Code have scanning limit?</span>
                  <span class="icon">
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <p>No, our QR-Codes have no scanning limit.</p>
                  </div>
              </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Can I attatch a QR Code created with another program to my OUR-QR account?</span>
                <span class="icon">
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>No. We only allow users to add codes to their profile that have been created through our service. Even if you have created a QR code without registering it gets a special ID address. We use it to identify and link it to your account .</p>
                </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>How do I delete QR-Code ?</span>
                <span class="icon">
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>You can delete the QR-code yourself in your account. If you don't have an account, create one, then contact our support team. We'll need your QR code and the email you use for your account, an operator will add the QR code to your account and you can manage it .</p>
                </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>IS there an expiration time on the QR-Code ?</span>
                <span class="icon">
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                  <p>No, our QR codes do not have a time limit. You can use them for as long as you need .</p>
                </div>
            </div>
          </article>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="get-free-quote">
          <form id="free-quote" method="post" role="search" action="FAQ.php">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h2>Contact Us</h2>
                </div>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on"
                    required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Your Surname..."
                    autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="email" name="email" id="email" placeholder="Your E-mail..." required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class="cta section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h4>Our Newsletter<br>Subscribe to our newsletter to receive our latest news and special offers.</h4>
        </div>
        <div class="col-lg-4">
          <div class="main-button">
            <a href="#">Subscribe</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>