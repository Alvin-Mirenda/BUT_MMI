<?php include("connexion.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BUT MMI, Métiers du Multimédia et de l'Internet, à Champs-sur-Marne forme aux métiers du web, du développement back-end, à l’UX Design, en passant par le Webmarketing ou la réalisation de produits audiovisuels. ">
    <title>BUT MMI Champs - les matières</title>
    <link rel="stylesheet" href="matieres.css">
    <link rel="stylesheet" type="text/css" media="print" href="matieres.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" href="img/favicon.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&display=swap" rel="stylesheet">

</head>
<body>

    <?php include 'navbar.php'?>  

    <div class="fil-ariane">
        <a href="index.php">Accueil</a><p>/ Les matières</p>
    </div>


    <div class="intro-matiere">
        <h1>Les matières enseignées</h1>
        <p>Le BUT MMI forme les étudiants sur différents pôles comprenant différents enseignements : <br><br>
         
        
        <div class="contenu-txt-matiere">
        <div class="txt-matiere">
            <p>
                <b>Le pôle Communication et marketing (40%)</b><br>
                    - Anglais <br>
                    - Marketing <br>
                    - Info-Com <br><br>
                <b>Le pôle Informatique (20%)</b><br>
                    - Intégration <br>
                    - Développement <br><br>
            </p>
        </div>
        
        <div class="txt-matiere">
            <p>
                <b>Le pôle culture Artistique (20%)</b><br>
                    - Design <br>
                    - Vidéo <br>
                    - Art <br><br>
                <b>Le pôle Culture scientifique (20%)</b><br>
                    - Science <br>
                    - Réseau <br>
                    - Gestion de projet <br>
            </p>
        </div>
        </div>

        


    </div>


        <div>
            <?php 

            $requete="SELECT * FROM matiere";
            $stmt = $db->query($requete);
            $resultat = $stmt->fetchall(PDO::FETCH_ASSOC);

            foreach ($resultat as $matiere) {
                echo" 
                        <div class='card-matiere'>
                                <div class='matiere-image'><img src='{$matiere["image_matiere"]}' alt=''></div>
                                <div class='matiere-texte-conteneur'>
                                    <h2 class='matiere-titre'>{$matiere["nom_matiere"]}</h2>
                                    <p class='matiere-texte'>{$matiere["description_matiere"]}</p>
                                </div>
                        </div>
                ";
            }   
            ?>
        </div>


    <div class="btn-header">
        <a href="projets.php"  class="btn-decouvrir btn-slide-left">Découvrir les projets des étudiants</a>
     </div>



     <?php include 'footer.php'?>  
</body>
</html>