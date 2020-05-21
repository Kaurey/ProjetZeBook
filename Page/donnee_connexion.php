<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="menu.css">
        <link rel="stylesheet" type="text/css" href="donnee_connexion.css">
    </head>

    <body>

        <header>

            <!-- Bannière et menu du site -->
        
            <?php include("menu.php"); ?>
    
        </header>
        
        <?php 

            include("baseDonnées.php");

            $pseudo = $_POST['pseudo']; 

            $req = $bdd->prepare('SELECT id, mot_de_passe, type FROM membre WHERE pseudo = :pseudo');
            $req->execute(array(
                'pseudo' => $pseudo));
            $resultat = $req->fetch();

            // Comparaison du pass envoyé via le formulaire avec la base
            $isPasswordCorrect = password_verify($_POST['mot_de_passe'], $resultat['mot_de_passe']);

            if (!$resultat) {
                echo 'Mauvais identifiant ou mot de passe !';
            }
            else {
                if ($isPasswordCorrect) {
                    $_SESSION['id'] = $resultat['id'];
                    $_SESSION['pseudo'] = $pseudo;
                    $_SESSION['type'] = $resultat['type'];
                    echo '<p>Bienvenue ', $_SESSION['pseudo'], '</p>';
                    echo '<p>Vous êtes connecté !</p>';
                }
                else {
                    echo 'Mauvais identifiant ou mot de passe !';
                }
            }
        ?>
   
    </body>
</html>
