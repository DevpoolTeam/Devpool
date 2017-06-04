<?php
session_start();
if (!isset($_SESSION['kor_ime'])){
    header("Location: login.php");
}

$error = false;
if(isset($_POST['submit'])){
	$imeankete = $_POST["imeankete"];
	
	$prvopitanje = $_POST["prvopitanje"];
	$drugopitanje = $_POST["drugopitanje"];
	$trecepitanje = $_POST["trecepitanje"];
	
	$prvopitanje_prviodgovor = $_POST["prvopitanje_prviodgovor"];
	$prvopitanje_drugiodgovor = $_POST["prvopitanje_drugiodgovor"];
	$prvopitanje_treciodgovor = $_POST["prvopitanje_treciodgovor"];
	
	$drugopitanje_prviodgovor = $_POST["drugopitanje_prviodgovor"];
	$drugopitanje_drugiodgovor = $_POST["drugopitanje_drugiodgovor"];
	$drugopitanje_treciodgovor = $_POST["drugopitanje_treciodgovor"];
	
	$trecepitanje_odgovor = $_POST["trecepitanje_odgovor"];
	
	$error = true;
}


?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title> Devpool App </title>
</head>
<body>
	<div class="wrapper">
		<img class="logo" src="5863ef2b7d90850fc3ce296a.png" width="100px" height="100px"/>
		<div class="logout_link"><p><a href="logout.php"> Odjava </a></p></div>
		<div style="margin-top: -250px;">
			<form method="post" action="">
				<table>
					<tr>
						<td>Ime ankete: </td>
						<td><input type="text" placeholder="Unesi ime ankete..." name="imeankete"/></td>
					</tr>
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					<tr>
						<td><br/></td>
					</tr>
					<tr>
						<td>Pitanje #1 </td>
						<td><input type="text" placeholder="Tekst prvog pitanja..." name="prvopitanje"/> (pitanje s jednostrukim odgovorom)</td>
					</tr>
					<tr>
						<td><br/></td>
					</tr>
					<tr>
						<td>Odgovor #1 <input type="radio" name="" checked /> </td>
						<td><input type="text" placeholder="Prvi odgovor..." name="prvopitanje_prviodgovor"/></td>
					</tr>
					<tr>
						<td>Odgovor #2 <input type="radio" name="" /> </td>
						<td><input type="text" placeholder="Drugi odgovor..." name="prvopitanje_drugiodgovor"/></td>
					</tr>
					<tr>
						<td>Odgovor #3 <input type="radio" name="" /> </td>
						<td><input type="text" placeholder="Treći odgovor..." name="prvopitanje_treciodgovor"/></td>
					</tr>
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					<tr>
						<td>Pitanje #2 </td>
						<td><input type="text" placeholder="Tekst drugog pitanja..." name="drugopitanje"/> (pitanje s višestrukim odgovorom)</td>
					</tr>
					<tr>
						<td><br/></td>
					</tr>
					<tr>
						<td>Odgovor #1 <input type="checkbox" name="" checked /> </td>
						<td><input type="text" placeholder="Prvi odgovor..." name="drugopitanje_prviodgovor"/></td>
					</tr>
					<tr>
						<td>Odgovor #2 <input type="checkbox" name="" checked /> </td>
						<td><input type="text" placeholder="Drugi odgovor..." name="drugopitanje_drugiodgovor"/></td>
					</tr>
					<tr>
						<td>Odgovor #3 <input type="checkbox" name="" /> </td>
						<td><input type="text" placeholder="Treći odgovor..." name="drugopitanje_treciodgovor"/></td>
					</tr>
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					<tr>
						<td>Pitanje #3 </td>
						<td><input type="text" placeholder="Tekst prvog pitanja..." name="trecepitanje"/> (pitanje s opširnim odgovorom)</td>
					</tr>
					<tr>
						<td><br/></td>
					</tr>
					<tr>
						<td>Odgovor #1 </td>
						<td><textarea placeholder="Unesi odgovor" name="trecepitanje_odgovor"></textarea></td>
					</tr>
					<tr>
						<td><br/></td>
					</tr>
					<tr>
						<td style="padding-left:200px;"><input type="submit" value="Potvrdi" name="submit"/></td>
						<td style="padding-left:200px;"><input type="reset" value="Isprazni polja"/></td>
					</tr>
					
				</table>
			</form>
		</div>
		
	</div>
</body>
</html>