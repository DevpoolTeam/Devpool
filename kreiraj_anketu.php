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
	
	$dbc = mysqli_connect('localhost', 'root', '', 'survey') or die('Error connecting to MySQL server.');
	$query = "INSERT INTO questions(ime_ankete, prvo_pitanje, prvo_pitanje_prvi_odgovor, prvo_pitanje_drugi_odgovor, prvo_pitanje_treci_odgovor,
	drugo_pitanje, drugo_pitanje_prvi_odgovor, drugo_pitanje_drugi_odgovor, drugo_pitanje_treci_odgovor, trece_pitanje, trece_pitanje_odgovor)
	VALUES ('$imeankete', '$prvopitanje', '$prvopitanje_prviodgovor', '$prvopitanje_drugiodgovor', '$prvopitanje_treciodgovor', '$drugopitanje', 
		'$drugopitanje_prviodgovor', '$drugopitanje_drugiodgovor', '$drugopitanje_treciodgovor', '$trecepitanje', '$trecepitanje_odgovor')";
	$result = mysqli_query($dbc, $query) or die('Error querying databese.');
	mysqli_close($dbc);
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
		<div style="margin-top: -250px;">
			<form method="post" action="">
				<table>
					<tr>
						<td>Ime ankete: </td>
						<td><input type="text" placeholder="Unesi ime ankete..." name="imeankete" style="border: 0.2px solid #b20125;"/></td>
					</tr>
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					<tr>
						<td><br/></td>
					</tr>
					<tr>
						<td>Pitanje #1 </td>
						<td><input type="text" placeholder="Tekst prvog pitanja..." name="prvopitanje" style="border: 0.2px solid #b20125;"/> (pitanje s jednostrukim odgovorom)</td>
					</tr>
					<tr>
						<td><br/></td>
					</tr>
					<tr>
						<td>Odgovor #1 <input type="radio" name="" checked /> </td>
						<td><input type="text" placeholder="Prvi odgovor..." name="prvopitanje_prviodgovor" style="border: 0.2px solid #b20125;"/></td>
					</tr>
					<tr>
						<td>Odgovor #2 <input type="radio" name="" /> </td>
						<td><input type="text" placeholder="Drugi odgovor..." name="prvopitanje_drugiodgovor" style="border: 0.2px solid #b20125;"/></td>
					</tr>
					<tr>
						<td>Odgovor #3 <input type="radio" name="" /> </td>
						<td><input type="text" placeholder="Treći odgovor..." name="prvopitanje_treciodgovor" style="border: 0.2px solid #b20125;"/></td>
					</tr>
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					<tr>
						<td>Pitanje #2 </td>
						<td><input type="text" placeholder="Tekst drugog pitanja..." name="drugopitanje" style="border: 0.2px solid #b20125;"/> (pitanje s višestrukim odgovorom)</td>
					</tr>
					<tr>
						<td><br/></td>
					</tr>
					<tr>
						<td>Odgovor #1 <input type="checkbox" name="" checked /> </td>
						<td><input type="text" placeholder="Prvi odgovor..." name="drugopitanje_prviodgovor" style="border: 0.2px solid #b20125;"/></td>
					</tr>
					<tr>
						<td>Odgovor #2 <input type="checkbox" name="" checked /> </td>
						<td><input type="text" placeholder="Drugi odgovor..." name="drugopitanje_drugiodgovor" style="border: 0.2px solid #b20125;"/></td>
					</tr>
					<tr>
						<td>Odgovor #3 <input type="checkbox" name="" /> </td>
						<td><input type="text" placeholder="Treći odgovor..." name="drugopitanje_treciodgovor" style="border: 0.2px solid #b20125;"/></td>
					</tr>
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					<tr>
						<td>Pitanje #3 </td>
						<td><input type="text" placeholder="Tekst prvog pitanja..." name="trecepitanje" style="border: 0.2px solid #b20125;"/> (pitanje s opširnim odgovorom)</td>
					</tr>
					<tr>
						<td><br/></td>
					</tr>
					<tr>
						<td>Odgovor #1 </td>
						<td><textarea placeholder="Unesi odgovor" name="trecepitanje_odgovor" style="border: 0.2px solid #b20125;"></textarea></td>
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