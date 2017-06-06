<?php
session_start();
if (!isset($_SESSION['kor_ime'])){
    header("Location: login.php");
}
	
?>



<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Devpool App </title>
</head>
<body>
	<div class="wrapper" style="padding-top:50px;">
		<div class="back_link"><p><a href="index.php"> Povratak </a></p></div>
		<img class="logo" src="5863ef2b7d90850fc3ce296a.png" width="100px" height="100px"/>
		<div class="logout_link"><p><a href="logout.php"> Odjava </a></p></div>
		<img src="in_construction.jpg" style="position:relative; left:200px; top: 100px;"/>
		
	</div>
</body>
</html>