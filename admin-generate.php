<?php
include("admin-header.php");
if (isset($_SESSION['adminID'])) {
}else {
    header("location: entry-admin.php");
}
?>

<?php
?>
<div class="Generate section" id="Generate">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="Generate-content" style="padding-right: 460px;padding-left: 240px;">
                    <div class="row">
                        <div class="col-lg-8">
                            <form id="Generate-form" action="qradmin.php" method="post">
                                <div class="row">
                                   
                                        
                                            <h2><em>Generate</em> QR CODE</h2>
                                        
                                    
                                    <input type="text" name="link" id="link" placeholder="Enter Qr Link" required data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control">
                                    <input type="date" name="date" id="date" placeholder="Enter Today's date" required>
                                    <input type="text" name="compNo" id="compNo" placeholder="Enter Computer Number" required>
                                    <input type="text" name="labName" id="labName" placeholder="Enter Lab's Name" required>
                                    <button type="submit" value="Generate QR" name="sbt-btn" class="orange-button">Generate Now</button>
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