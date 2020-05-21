<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="menu.css">
		<link rel="stylesheet" type="text/css" href="connexion.css">
	</head>
	<body>

		<header>
		
		<!-- Bannière et menu du site -->

		<?php include("menu.php");?>

		</header>

		<form method="post" action="donnee_connexion.php">
			<label>Votre pseudo</label> : <input type="text" name="pseudo"/><br>
			<label>Mot de passe</label> : <input type="password" name="mot_de_passe"/><br>
			<input type="submit" value="connexion">
		</form>

	</body>
</html>