<?php 
include("session.php");
include("header.php");
?>
    <div class="Generate section" id="Generate">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="Generate-content">
                        <div class="row">
                            <div class="col-lg-8">
                                <form id="Generate-form" action="qr.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-heading">
                                                <h2><em>Generate</em> QR CODE</h2>
                                            </div>
                                        </div>
                                        <div class="aac">
                                            <fieldset>
                                            <input type="text" name="qrText" id="qrText" placeholder="Enter Qr Text" required
                                            data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"></fieldset>
                                        </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" value="Generate QR" name="sbt-btn" class="orange-button">Generate Now</button>
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