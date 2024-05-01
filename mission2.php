<!DOCTYPE html>
<html lang="fr">

<?php require('pages/include/head.php') ?>

<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center title">
        Travaux n°2
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
                    <h1 class="page-title">Gestion d'une Base de données avec PHP</h1>
                </header>

                <p><img src="assets/images/bdd.jpg" alt=""></p>

                <h3>Description des tâches</h3>
                <ul>
                    <li>Création d'un identifiant et mot de passe sur Php MyAdmin</li>
                    <li>Création d'une table de donnée test</li>
                    <li>Création des colonnes avec les différents paramètres (type, noms, etc...)</li>
                    <li>Test de la base via une requête sql test (Create, Delete and Select)</li>
                </ul>

                <h3>Moyens utilisés</h3>
                <ul>
                    <li>Visual Studio code</li>
                    <li>Installation de xamp pour une simulation de serveur local</li>
                    <li>Tutoriel PHP et SQL</li>
                    <li>Site Web Microlead</li>
                </ul>

                <h3>Avec qui</h3>
                <p>Mission effectuée seul mais avec de l'aide du professeur et des camarades de classe</p>

                <h3>Contexte</h3>
                <p>
                    Effectué à : My Digital Shool Angers <br>
                    Service : Informatique et Développement Applicatif<br>
                </p>

                <h3>Annexes</h3>
                <div style="margin: 30px 0px;">
                    <a href="pma.alexisledoussal.fr" class="gray-button" target="_blank">
                        <span style="padding: 15px; border: 2px solid #333; border-radius: 0px; background-color: #333;">
                            <i class="fa fa-solid fa-paperclip" style="color: white;"></i>
                        </span>
                        <span style="color: #333; margin-left: 10px; font-size: 15px;">PHPMyAdmin</span>
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