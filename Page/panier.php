<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="menu.css">
		<link rel="stylesheet" type="text/css" href="panier.css">
	</head>
	<body>

		<header>

			<!-- Bannière et menu du site -->
		
			<?php include("menu.php"); ?>
	
		</header>

		<h1 class="titre_panier">Votre panier</h1>

		<?php include("baseDonnées.php");


		$idMembre = $_GET['idMembre'];

		$afficher=$bdd->prepare('SELECT *
							  	 FROM panier
							   	 JOIN livre ON panier.isbnLivre = livre.isbn
							   	 WHERE idMembre = :idMembre');
		$afficher->execute(array(
				'idMembre' => $idMembre));

		while($ajout = $afficher->fetch()){
		?>	
			<div class="imgtitre">
				<img src="images/miniature/min_<?php echo $ajout['isbn'];?>">
		
				<p><?php echo $ajout['titre'];?></p>
			</div>
		<?php
		}		

		?>



	</body>
</html>