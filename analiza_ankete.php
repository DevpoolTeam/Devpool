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
	<div class="wrapper">
		<div class="back_link"><p><a href="index.php"> Povratak </a></p></div>
		<img class="logo" src="5863ef2b7d90850fc3ce296a.png" width="100px" height="100px"/>
		<div class="logout_link"><p><a href="logout.php"> Odjava </a></p></div>
		<img src="analiza.png" style="position:relative; left:50px;"/>
		<img src="analiza_1.png" style="position:relative; left:100px; z-index:-1;"/>
		
	</div>
</body>
</html>