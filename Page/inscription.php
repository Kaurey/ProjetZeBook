<!DOCTYPE html>
<html>
	<head>
		<title>Inscription</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="menu.css">
		<link rel="stylesheet" type="text/css" href="inscription.css">
	</head>
	<body>
		<?php include("baseDonnées.php");?>
		
		<header>
		
		<!-- Bannière et menu du site -->

		<?php include("menu.php"); ?>

	</header>
	<form method="post" action="donnee_inscription.php">
		<label>Votre pseudo</label> : <input type="text" name="pseudo"/><br>
		<label>Mot de passe</label> : <input type="password" name="mot_de_passe"/><br>
		<label class="mail">Email</label> : <input type="text" name="email"/><br>
		<input type="submit" name="inscription" value="s'inscrire">
	</form>

	</body>
</html>