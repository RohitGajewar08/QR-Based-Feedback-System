<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE user_id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="6;url=http://localhost/Mini%20Project/Home.php" >
    <link rel="stylesheet" href="assets/css/style3.css">
    <link rel="stylesheet" href="assets/css/style-index.css">

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
    
    <?php if (isset($user)): ?>
    
        <p>Hello <?= htmlspecialchars($user["userID"]) ?>.....</p>
        <!-- <p><a href="logout.php">Log out</a></p> -->
        
    <?php else: ?>

        <p><a href="login.php">Log in</a> or <a href="signup.php">sign up</a></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    