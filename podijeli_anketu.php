﻿<?php
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
		<div class="mainmenu" style="margin-top:100px">
			<h2 align="center" style="text-transform: uppercase;"> Podijeli svoju anketu </h2>
			<div align="center" style="border: 0.2px solid #b20125;" width="50px">
				<p> http://localhost/projektno%20programiranje/user_survey.php </p>
			</div>
			<p align="center"> Prekopiraj link iznad i podijeli ga gdje želiš... </p>
			<br/>
			<p align="center"> ... ili podijeli putem e-maila: </p>
			<div style="position:relative; left: 280px; top:50px;"><a style="text-decoration: none;border: 2px solid #999;display: inline block;padding: 10px;border-radius: 20px;color: #b20125;"href="mailto:?Subject=Anketa&Body=http://localhost/projektno%20programiranje/user_survey.php %0D%0A%20Unaprijed%20hvala%20na%20ispunjavanju%20ankete%21">Klikni za dijeljenje mailom</a></div>
		</div>
		
	</div>
</body>
</html>