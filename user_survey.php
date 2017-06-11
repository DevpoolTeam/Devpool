<?php

session_start();
if (!isset($_SESSION['kor_ime'])){
    header("Location: login.php");
}

$dbc = mysqli_connect('localhost', 'root', '1234', 'survey_db') or die('Spajanje na bazu neuspjesno.');
$query = 'SELECT * FROM questions';
$result = mysqli_query($dbc, $query);
while($row = mysqli_fetch_array($result)){
	$imeankete = $row['ime_ankete'];
	$prvo_pitanje = $row['prvo_pitanje'];
	$drugo_pitanje = $row['drugo_pitanje'];
	$trece_pitanje = $row['trece_pitanje'];
	$prvo_pitanje_prviodgovor = $row['prvo_pitanje_prvi_odgovor'];
	$prvo_pitanje_drugiodgovor = $row['prvo_pitanje_drugi_odgovor'];
	$prvo_pitanje_treciodgovor = $row['prvo_pitanje_treci_odgovor'];
	$drugo_pitanje_prviodgovor = $row['drugo_pitanje_prvi_odgovor'];
	$drugo_pitanje_drugiodgovor = $row['drugo_pitanje_drugi_odgovor'];
	$drugo_pitanje_treciodgovor = $row['drugo_pitanje_treci_odgovor'];
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
		<form method="post" action="" style="margin-top:-100px;">
				<table style="width:600px;">
					<tr>
						<td><?php echo $imeankete;?></td>
					</tr>
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					<tr>
						<td><br/></td>
					</tr>
					<tr>
						<td><?php echo $prvo_pitanje;?></td>
					</tr>
					<tr>
						<td><br/></td>
					</tr>
					<tr>
						<td><input type="radio" value="1"><?php echo $prvo_pitanje_prviodgovor;?></input></td>
					</tr>
					<tr>
						<td><input type="radio" value="2"><?php echo $prvo_pitanje_drugiodgovor;?></input></td>
					</tr>
					<tr>
						<td><input type="radio" value="3"><?php echo $prvo_pitanje_treciodgovor;?></input></td>
					</tr>
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					<tr>
						<td><?php echo $drugo_pitanje;?></td>
					</tr>
					<tr>
						<td><br/></td>
					</tr>
					<tr>
						<td><input type="checkbox" value="1"><?php echo $drugo_pitanje_prviodgovor;?></input></td>
					</tr>
					<tr>
						<td><input type="checkbox" value="2"><?php echo $drugo_pitanje_drugiodgovor;?></input></td>
					</tr>
					<tr>
						<td><input type="checkbox" value="3"><?php echo $drugo_pitanje_treciodgovor;?></input></td>
					</tr>
					<tr>
						<td colspan="2"><hr/></td>
					</tr>
					<tr>
						<td><?php echo $trece_pitanje;?></td>
					</tr>
					<tr>
						<td><br/></td>
					</tr>
					<tr>
						<td><textarea placeholder="Unesi odgovor" name="trecepitanje_odgovor" style="border: 0.2px solid #b20125;" rows="5"></textarea></td>
					</tr>
					<tr>
						<td><br/></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" value="Potvrdi" name="submit" style="margin-left:175px;"/><input type="reset" value="Isprazni polja" style="margin-left:50px;"/></td>
					</tr>
					
				</table>
			</form>
		
	</div>
</body>
</html>