<?php include("connexion.php");?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BUT MMI, Métiers du Multimédia et de l'Internet, à Champs-sur-Marne forme aux métiers du web, du développement back-end, à l’UX Design, en passant par le Webmarketing ou la réalisation de produits audiovisuels. ">
    <title>BUT MMI Champs - les enseignants</title>
    <link rel="stylesheet" href="enseignants.css">
    <link rel="stylesheet" type="text/css" media="print" href="enseignants.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" href="img/favicon.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&display=swap" rel="stylesheet">
</head>

<body>
    <?php include("navbar.php");?>

    <div class="fil-ariane">
        <a href="index.php">Accueil</a><p>/ Les enseignants</p>
    </div>

    <div class="container">
        <h1>Les enseignants</h1>
        <p class="txt">
        Le BUT MMI est composé de professeurs hautement qualifiés, motivés et dévoués qui offrent aux étudiants un enseignement de qualité, innovant et créatif. L’équipe pédagogique s'efforce d'aider les élèves à se développer en tant que citoyens responsables et à s'engager dans leurs études. Grâce à l'engagement et à la dévotion des professeurs, l’Université Gustave EIffel offre aux étudiants une éducation solide et enrichissante. Nous sommes fiers de l'engagement et du dévouement des professeurs à l'égard des étudiants et nous nous efforçons de les aider à atteindre leur plein potentiel. Parmi l’équipe pédagogique, nous comptons des professeurs spécialisés dans les métiers du web ainsi que dans le design et la communication.
        <p>
    </div>

    <section class="bloc-enseignants">			

		<div class="card-enseignant">
		<?php
			$requete="SELECT * FROM enseignants";

			$stmt=$db->query($requete);
			$resultat=$stmt->fetchall(PDO::FETCH_ASSOC);

			foreach($resultat as $enseignant){
				echo"
				<div class='card'>
					<div class='card-img' style='background-image: url({$enseignant["image_enseignant"]})'></div>

					<div class='card-info'>
						<p class='nom-enseignant'>{$enseignant["nom_enseignant"]}</p>
						<p class='matiere-enseignant'>{$enseignant["matiere_enseignant"]}</p>
					</div>
				</div>";
			}
    	?>
		</div>
		
    </section>

    <a href="matieres.php"  class="btn-matieres btn-slide-left">Les matières enseignées en MMI</a>

    <?php include("footer.php");?>
</body>

</html>