<?php session_start();?>
<h1 class="titre">ZeBook</h1>

<!-- Menu -->

<nav>
    
        <?php

        if(isset($_SESSION['id'])){

            if($_SESSION['type'] == "admin"){ ?>
                <ul class="menu">
                    <li><a href="Index.php">Tous les livres</a></li>
                    <li><a href="Auteurs.php">Auteurs</a></li>
                    <li><a href="NewLivre.php">Ajout</a></li>
                    <li><a href="deconnexion.php">Déconnexion</a></li>
                </ul>
            <?php 
            } 
            else if($_SESSION['type'] == "users"){ ?>
                <ul class="menu">
                    <li><a href="Index.php">Tous les livres</a></li>
                    <li><a href="Auteurs.php">Auteurs</a></li>
                    <li><a href="panier.php">Votre Panier</a></li>
                    <li><a href="deconnexion.php">Déconnexion</a></li>
                </ul>
            <?php 
            }
        }  
        else { ?>
            <ul class="menu">
                <li><a href="Index.php">Tous les livres</a></li>
                <li><a href="Auteurs.php">Auteurs</a></li>
                <li><a href="inscription.php" class="inscription">Inscription</a></li>
                <li><a href="connexion.php" class="connexion">Connexion</a></li>
            </ul>
    	<?php } ?>

</nav>
