<?php include("connexion.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BUT MMI, Métiers du Multimédia et de l'Internet, à Champs-sur-Marne forme aux métiers du web, du développement back-end, à l’UX Design, en passant par le Webmarketing ou la réalisation de produits audiovisuels. ">
    <title>BUT MMI Champs - les métiers</title>
    <link rel="stylesheet" href="metiers.css">
    <link rel="stylesheet" type="text/css" media="print" href="metier.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" href="img/favicon.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&display=swap" rel="stylesheet">
</head>
<body>

    <?php include 'navbar.php'?>  
    
    <div class="fil-ariane">
        <a href="index.php">Accueil</a><p>/ Les métiers</p>
    </div>

    <main>
        <h1 class='titre-metier'>Les métiers</h1>
    </main>

    <section class="bloc-metiers">
        <div>
            <?php 

            $requete="SELECT * FROM metier";
            $stmt = $db->query($requete);
            $resultat = $stmt->fetchall(PDO::FETCH_ASSOC);

            foreach ($resultat as $metier) {
                echo" 
                        <div class='card-metier'>
                                <div class='metier-image'><img src='{$metier["image_metier"]}' alt=''></div>
                                <div class='metier-texte-conteneur'>
                                    <h2 class='metier-titre'>{$metier["nom_metier"]}</h2>
                                    <p class='metier-texte'>{$metier["description_metier"]}</p>
                                </div>
                        </div>
                ";
            }   
            ?>
        </div>

        <div class="btn-header">
            <a href="enseignants.php"  class="btn-enseignants btn-slide-left">Les enseignants de la formation</a>
        </div>
    </section>

    <?php include 'footer.php'?>  
</body>
</html>