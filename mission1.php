<!DOCTYPE html>
<html lang="fr">

<?php require('pages/include/head.php') ?>

<body class="home">
<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center title">
        Travaux n°1
		</h1>
	</div>
    <?php require('pages/include/nav.php') ?>
</header>

<main>
    <div class="container">

        <div class="row topspace">
            
            <!-- Article main content -->
            <article class="col-sm-8 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Maquette Html et CSS d'un site vitrine</h1>
                </header>

                <p><img src="assets/images/template groundesk.png" alt=""></p>

                <h3>Description des tâches</h3>
                <ul>
                    <li>Analyse d'une maquette sur Figma pour le rendu graphique</li>
                    <li>Décorticage du template afin de séparer la partie style (CSS) et affichage web (html)</li>
                    <li>Création des animations et boutons en Javascript</li>
                    <li>Structuration du code</li>
                </ul>

                <h3>Moyens utilisés</h3>
                <ul>
                    <li>Installation de Visual Studio code et addons rattachés (GoLive, etc...)</li>
                    <li>Site web pour l'utilisation des Flexbox</li>
                    <li>Tutoriels sur le code HTML, CSS et Javascript</li>
                    <li>Site Web Microlead</li>
                    <li>Figma</li>
                </ul>

                <h3>Avec qui</h3>
                <p>mission effectuer seul mais avec de l'aide du professeur et des camarades de classe</p>

                <h3>Contexte</h3>
                <p>
                    Effectué à : My Digital Shool Angers <br>
                    Service : Informatique et Développement Applicatif<br>
                </p>

                <h3>Annexes</h3>
                <div style="margin: 30px 0px;">
					<a href="https://github.com/AlexisLD22/btssio2223/tree/main/Integration_statique-Saas-main/Integration_statique-Saas-main" class="gray-button" target="_blank">
						<span style="padding: 15px; border: 2px solid #333; border-radius: 0px; background-color: #333;">
							<i class="fa fa-github fa-2" style="color: white;"></i>
						</span>
						<span style="color: #333; margin-left: 10px; font-size: 15px;">Repository GitHub</span>
					</a>
				</div>
            </article>
            <!-- /Article -->
        </div>
    </div>	<!-- /container -->
</main>


<?php require('pages/include/footer.php') ?>

<?php require_once('pages/include/script.php')?>
</body>
</html>