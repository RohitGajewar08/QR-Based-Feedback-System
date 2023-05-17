<?php
$Name = $_POST['name'];
$Surname = $_POST['surname'];
$Email = $_POST['email'];
$Subject = $_POST['subject'];



$conn = new mysqli('localhost','root','','computer_db');
if($conn->connect_error){
    die('Connection Failed : '.$conn->conect_error);
}else{
    $stmt = $conn->prepare("insert into FAQ(Name,Surname,Email,Subject) values(?, ?, ?, ?)");
   $stmt->bind_param("ssss",$Name,$Surname,$Email,$Subject);
   $stmt->execute();
   echo "";
}
?><html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">We Will Contact You Soon</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">OUR QR | EVERYTHING IN ONE</p>
	</div>
</body>
</html>