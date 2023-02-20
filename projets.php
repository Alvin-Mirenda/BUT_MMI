<?php include("connexion.php");?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BUT MMI Champs - les projets</title>
        <link rel="stylesheet" href="swiper-bundle.min.css">
        <link rel="stylesheet" href="projets.css">
        <link rel="stylesheet" type="text/css" media="print" href="projets.css">
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="icon" href="img/favicon.png"/>
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&display=swap" rel="stylesheet">
    </head>

    <body>
    <?php include("navbar.php");?>

    <div class="fil-ariane">
        <a href="index.php">Accueil</a><p>/ Les projets</p>
    </div>

    <div class="developpemet">
      <h1>Les projets</h1>

        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">

                <?php
				$requete="SELECT * FROM projet";

				$stmt=$db->query($requete);
				$resultat=$stmt->fetchall(PDO::FETCH_ASSOC);
	
				foreach($resultat as $projet){
					echo"
                        <div class='card swiper-slide'>
                            <div class='image-content'>
                                <span class='overlay'></span>

                                <div class='card-image'>
                                    <img src='{$projet["image_projet"]}' alt='' class='card-img'>
                                </div>
                            </div>

                            <div class='card-content'>
                                <h2 class='name'>{$projet["nom_projet"]}</h2>
                                <p class='description'>{$projet["description_projet"]}</p>
                                <a href='{$projet["lien_projet"]}' class='button'>Voir le projet ? </a>
                            </div>
                         </div>
                    ";
				}
				?>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php include("footer.php");?>

    <script src="swiper-bundle.min.js"></script>
    <script src="projets.js"></script>
</body>
</html>
