<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="menu.css">
		<link rel="stylesheet" type="text/css" href="livrepanier.css">
	</head>
	<body>

		<header>

			<!-- Bannière et menu du site -->
		
			<?php include("menu.php"); ?>
	
		</header>

		<?php include("baseDonnées.php");

			$isbnLivre = $_GET['isbn'];
			$idMembre = $_GET['idMembre'];
			
			$req=$bdd->prepare('INSERT INTO panier(idMembre, isbnLivre) VALUES (:idMembre, :isbnLivre)');

			$req->execute(array(
					'idMembre' => $idMembre,
					'isbnLivre' => $isbnLivre));
		?>

		<p>Votre livre a bien été ajouté !</p>
	</body>
</html>