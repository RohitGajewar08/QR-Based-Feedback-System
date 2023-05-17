<?php
include("teacher-header.php");
if (isset($_SESSION['teacherID'])) {
} else {
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
                            <form id="Generate-form" action="teacherqr.php" method="post">
                                <div class="row">
                                    <h2><em>Generate</em> QR CODE</h2>
                                    <input type="text" name="id" id="link" placeholder="Enter Qr Link ID" required>
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>

</html>