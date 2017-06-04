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
		<img class="logo" src="5863ef2b7d90850fc3ce296a.png" width="100px" height="100px"/>
		<div class="logout_link"><p><a href="logout.php"> Odjava </a></p></div>
		<div class="mainmenu">
			<div class="mainmenu1"><a href="kreiraj_anketu.php"> Kreiraj novu anketu </a></div>
			<div class="mainmenu2"><a href="anketa_admin.php"> Administracija ankete </a></div>
			<div class="mainmenu3"><a href="#"> Pregled odgovora </a></div>
			<div class="mainmenu4"><a href="podijeli_anketu.php"> Podijeli anketu </a></div>
		</div>
		
	</div>
</body>
</html>