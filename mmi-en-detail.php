<?php include("connexion.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BUT MMI, Métiers du Multimédia et de l'Internet, à Champs-sur-Marne forme aux métiers du web, du développement back-end, à l’UX Design, en passant par le Webmarketing ou la réalisation de produits audiovisuels. ">
    <title>BUT MMI Champs - en détail</title>
    <link rel="stylesheet" href="mmi-en-detail.css">
    <link rel="stylesheet" type="text/css" media="print" href="mmi-en-detail.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" href="img/favicon.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&display=swap" rel="stylesheet">
</head>
<body> 
    
    <?php include ("navbar.php");?>  

    <div class="fil-ariane">
        <a href="index.php">Accueil</a><p>/ MMI en détail</p>
    </div>

    <section class="bloc-detail-intro">

        <img src="img/mmi-en-detail.jpeg" alt="" class="detail-image">
        <div class="box-texte-detail">
            <h1>Mmi en Détail</h1>
            <p>
            MMI est une formation pluridisciplinaire axée vers le domaine du multimédia, de l’Internet et du Web. Elle prépare les étudiants à travailler dans les secteurs de la communication, du graphisme, du design, du développement web ainsi que l’audiovisuel.
            Grâce à cela, l’étudiant sera préparé avec de nombreuses compétences pratiques et connaissances théoriques pour une poursuite d’étude ou un emploi.
            </p>
        </div>

    </section>

    <section class="grid">
        <div>
            <div class="text">
            <h2>Une formation avec de nombreux projets !</h2>
            <p>
            Avec la réforme des BUT, la formation MMI dure désormais 3 ans !
            Cependant, la pédagogie ne change pas, d’une part des cours théoriques, mais une majorité de cours pratiques et des projets très réalistes et professionnalisants avec des sujets et des contraintes que l’on retrouve facilement dans le monde du travail.
            </p>
            </div>
        </div>
        <div>
            <div class="text">
            <h2>MMI, c’est aussi une famille</h2>
            <p>La formation MMI, c’est aussi une grande famille avec laquelle nous organisons des moments ensemble pour fêter Halloween, Noël et d’autres événements. Les étudiants s'entraident énormément et peuvent compter les uns pour les autres. Les enseignants sont aussi à leur écoute et restent toujours disponibles.</p>
            </div>
        </div>
    </section>

    <section class="bloc-detail-conclu">
        <h1>Ce qu'il faut retenir</h1>
        <p>MMI est une formation ouverte à tous, si tu es intéressé(e) par les métiers du multimédia et de l’internet et que tu aimes en apprendre sur les technologies qui nous entourent et qui évoluent tous les jours, que tu te sens créatif / créative et motivé(e). <br>
        Alors rejoins-nous !
        </p>
    </section>
    
    <a href="metiers.php"  class="btn-metiers btn-slide-left">Découvrir les métiers après MMI</a>

    <?php include("footer.php");?>
    
</body>
</html>