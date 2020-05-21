<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="menu.css">
		<link rel="stylesheet" type="text/css" href="donnee_inscription.css">
	</head>
	<body>

		<?php 

			include("baseDonnées.php");

			$pass_hache = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
			$pseudo = $_POST['pseudo'];
			$email = $_POST['email'];


			$req = $bdd->prepare('INSERT INTO membre(pseudo, mot_de_passe, email, type) VALUES(:pseudo, :mot_de_passe, :email, "users")');
			$req->execute(array(
    			'pseudo' => $pseudo,
    			'mot_de_passe' => $pass_hache,
    			'email' => $email));

		?>


		<header>
		
			<!-- Bannière et menu du site -->

			<?php include("menu.php"); ?>

		</header>

		<p>Vous êtes inscrit !</p>
		<p><a href="connexion.php">Connectez-vous!</a></p>


		

	</body>
</html>