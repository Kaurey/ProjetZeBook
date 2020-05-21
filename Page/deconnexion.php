<!DOCTYPE html>
<html>
	<head>
		<title>Déconnexion</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="menu.css">
		<link rel="stylesheet" type="text/css" href="connexion.css">
	</head>
	<body>
		<?php include("baseDonnées.php");?>
		
		<header>
		
			<!-- Bannière et menu du site -->

			<?php include("menu.php");?>

		</header>

		<?php 
			session_unset();
			session_destroy();
		?>

		<p>Vous êtes déconnecté !</p>

		<p><a href="connexion.php">Se connecter</a></p>

	</body>
</html>