<?php

$error = false;
if(isset($_POST['submit'])){
	$kor_ime = preg_replace('/[^A-Za-z]/', '', $_POST['kor_ime']);
	$lozinka = md5($_POST['lozinka']);
	if(file_exists('users/' . $kor_ime . '.xml')){
		$xml = new SimpleXMLElement('users/' . $kor_ime . '.xml', 0, true);
		if($lozinka == $xml->password){
			session_start();		
			$_SESSION['kor_ime'] = $kor_ime;
			header('Location: index.php');
			die;
		}
	}
	$error = true;
}	

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Devpool App </title>
</head>
<body>
	<div class="wrapper" style="padding-top:50px;">
		<img class="logo" src="5863ef2b7d90850fc3ce296a.png" width="100px" height="100px"/>
		<form action="" method="post">
			<table style="margin-top: -50px;">
				<tr>	
					<td>
						<?php
							if($error){
								echo '<p style="color:red;">Pogrešno korisničko ime i/ili lozinka!</p>';
							}
						?>	
					</td>
				</tr>
				<tr>
					<td align="center"><input class="login_input_css" type="text" name="kor_ime" id="kor_ime" placeholder="Unesi korisnicko ime..." align="center" style="border: 2px solid #999";/></td>
				</tr>
				<tr>
					<td align="center"><input class="login_input_css" type="password" name="lozinka" id="lozinka" placeholder="Unesi lozinku..." style="border: 2px solid #999;"/></td>
				</tr>
				<tr>
					<td align="center"><input class="login_input_buttons_css" type="submit" name="submit" id="submit" value="Potvrdi" style="border: 2px solid #999;"/></td>
				</tr>
				<tr>
					<td align="center"><input class="login_input_buttons_css" type="reset" name="reset" id="reset" value="Očisti polja" style="border: 2px solid #999;" color="red"/></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>