		<?php include("baseDonnées.php");?>

		<?php

		$req = $bdd->query('DELETE livre WHERE $_POST['isbn']')

		?>