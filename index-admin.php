<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database-admin.php";
    
    $sql = "SELECT * FROM admin
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $admin = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="6;url=http://localhost/Mini%20Project/admin_home.php" >
    <link rel="stylesheet" href="assets/css/style-admin.css">   

</head>
<body>
    <header>
	<img class="left-banner" src="../Mini Project/assets/images/images-top.png">
    <img class="right-banner" src="../Mini Project/assets/images/images-bottom.png">
	<img class="l-banner" src="../Mini Project/assets/images/banner-left-1.png">
	<img class="l-banner" src="../Mini Project/assets/images/banner-left-1.png">
    <img class="r-banner" src="../Mini Project/assets/images/banner-left.png">
	<img class="r-banner" src="../Mini Project/assets/images/banner-left.png">
    </header>
    
    <?php if (isset($admin)): ?>
    
        <p><?= htmlspecialchars($admin["role"]) ?> Login : <?= htmlspecialchars($admin["adminID"]) ?>.....</p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    