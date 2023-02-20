<?php include("connexion.php");?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="BUT MMI, Métiers du Multimédia et de l'Internet, à Champs-sur-Marne forme aux métiers du web, du développement back-end, à l’UX Design, en passant par le Webmarketing ou la réalisation de produits audiovisuels. ">
    <title>BUT MMI Champs</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" media="print" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="icon" href="img/favicon.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
    <?php include("navbar.php");?>
    
    <header class="bloc-header">
        <div>
            <div class="ctnt-header">
				<h1>Le BUT MMI à <br>Champs-sur-Marne</h1>
				<p>Une formation post-bac en 3 ans, qui permet d'acquérir et de développer des compétences pluridisciplinaires, entre la communication, les langues, l’informatique, la culture graphique et scientifique, connectées au monde et aux métiers d'Internet.</p>

            	<div class="btn-header">
                	<a href="#decouvrir-formation"  class="btn-decouvrir btn-slide-left">Découvrir</a>
            	 </div>
            </div>
			
			<img src="img/logo-accueil.webp" alt="" class="img-header">
           
        </div>
    </header>

	<section class="bloc-jpo">
		<a href="http://www.dut-mmi-champs.fr/jpo/2022/index.html" target="_blank" class="jpo-loop">
			<div class="jpo-loop-txt">Journée portes ouvertes le 4 février !</div>
			<div class="jpo-loop-txt">Journée portes ouvertes le 4 février !</div>
			<div class="jpo-loop-txt">Journée portes ouvertes le 4 février !</div>
			<div class="jpo-loop-txt">Journée portes ouvertes le 4 février !</div>
			<div class="jpo-loop-txt">Journée portes ouvertes le 4 février !</div>
			<div class="jpo-loop-txt">Journée portes ouvertes le 4 février !</div>
		</a>
		<div>
			<h3>La journée portes ouverte</h3>
			<p>Le samedi 4 février 2023 de 9h30 à 17h</p>
		</div>
		<a href="http://www.dut-mmi-champs.fr/jpo/2022/index.html" target="_blank" class="btn-jpo">Plus d'info sur la JPO</a>
	</section>

    <section id="decouvrir-formation" >
        <div class="decouvrir-formation">
            <h2>Découvrir la formation</h2>
            <div>
                <p>Le BUT MMI vous forme aux métiers du web, du développement back-end, à l’UX Design, en passant par le Webmarketing ou la réalisation de produits audiovisuels. Cette formation vous permet d’acquérir un bagage suffisant pour entrer dans le monde professionnel ou poursuivre vos études en master.</p>
                <a href="mmi-en-detail.php" class="btn-en-savoir-plus btn-slide-left">En savoir plus</a>
            </div>
        </div>
    </section>

	<section class="bloc-annonces-accueil">			
		<h2>Actualités</h2>

		<div class="card-annonces">
		<?php
			$requete="SELECT * FROM annonce ORDER BY id_annonce DESC LIMIT 3";

			$stmt=$db->query($requete);
			$resultat=$stmt->fetchall(PDO::FETCH_ASSOC);

			foreach($resultat as $annonce){
				echo"
				<div class='card'>
					<div class='card-img' style='background-image: url({$annonce["image_annonce"]})'></div>

					<div class='card-info'>
						<p class='titre-annonce'>{$annonce["titre_annonce"]}</p>
						<p class='text-annonce'>{$annonce["texte_annonce"]}</p>
					</div>
				</div>";
			}
    	?>
		</div>
		
    </section>

	<section class="bloc-projets-accueil">
		<h2>Les projets de nos étudiants</h2>
		<div class="projets-accueil">
			<input type="radio" name="position"/>
			<input type="radio" name="position"/>
			<input type="radio" name="position" checked/>
			<input type="radio" name="position"/>
			<input type="radio" name="position"/>
			<div id="carousel" class="carousel">
				<?php
				$requete="SELECT * FROM projet ORDER BY id_projet DESC LIMIT 5 ";

				$stmt=$db->query($requete);
				$resultat=$stmt->fetchall(PDO::FETCH_ASSOC);
	
				foreach($resultat as $projet){
					echo"
					<div class='carousel-elmt' style='background-image: url({$projet["image_projet"]})'>
						<div>
						<h3>{$projet["nom_projet"]}</h3>
						<p>{$projet["description_projet"]}</p>
						</div>
					</div>";
				}
				?>
			</div>
		</div>
		<a href="projets.php" class="btn-voir-projets btn-slide-left">Voir tous les projets</a>
    </section>

	<section class="bloc-temoignages-accueil">	

		<div class="temoignage-controls">
			<h2>Témoignages</h2>	

			<a class="prev" onclick="plusSlides(-1)">&#12296;</a>
			<a class="next" onclick="plusSlides(1)">&#12297;</a>
		</div>	
			
		<div class="slideshow-container temoignage-accueil">

		<?php
			$requete="SELECT * FROM temoignage";

			$stmt=$db->query($requete);
			$resultat=$stmt->fetchall(PDO::FETCH_ASSOC);

			foreach($resultat as $temoignage){
				echo"
				<div class='mySlides fade'>
					<div>
						<h3>{$temoignage["nom_temoignage"]}</h3>
						<p><b>{$temoignage["specialite_temoignage"]}</b></p>
					</div>
					<p><span>&#8220;</span>{$temoignage["description_temoignage"]}</p>
					<p>- {$temoignage["date_temoignage"]}</p>
				</div>";
			}
		?>
		</div>
	</section>

    <?php include("footer.php");?>
    <script src="script.js"></script>
</body>
</html>