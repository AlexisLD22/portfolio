<!DOCTYPE html>
<html lang="fr">

<?php require('pages/include/head.php') ?>

<body class='home'>

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center title">
        Création d'un logiciel de gestion de magasin
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
                    <h1 class="page-title">Création d'un logiciel de gestion de magasin</h1>
                </header>

                <p><img src="assets/images/c.jpg" alt=""></p>

                <h3>Contexte</h3>
                <span>Pendant ce projet, notre mission consistait à créer un outil interne pour une entreprise fictive à partir d'un modèle, permettant la gestion des utilisateurs, des clients et des animaux. De plus, il devait être possible pour les clients de prendre rendez-vous avec certains utilisateurs pour des services spécifiques. Ce projet constituait notre première expérience avec le PHP natif, nécessitant une mobilisation considérable de nos connaissances et nous permettant d'en acquérir davantage. Par la suite, le site a été hébergé sur un serveur et grâce à OVH, nous avons pu le rendre accessible à tous via <a href='#'>ce lien</a></span>

                <h3>Description des tâches</h3>
                <ul>
                    <li>Création d'un planning de tâches</li>
                    <li>Définition de l'architecture du site</li>
                    <li>Création d'un Workbench afin de créer la base de données MySQL sous PHPMyAdmin</li>
                    <li>Création de la requête sql pour la création de la base de données</li>
                    <li>Création d'un repository GIT</li>
                    <li>Répartition des tâches au sein de l'équipe</li>
                    <li>Clean du template initial à l'aide de la définition de l'architecture</li>
                    <li>Création des différentes pages du site</li>
                    <li>Sécurisation de la base de donnée et des mots de passes</li>
                    <li>Test et mise sur serveur du site</li>
                </ul>

                <h3>Moyens utilisés</h3>
                <ul>
                    <li>Visual Studio</li>
                    <li>AdminLTE template</li>
                    <li>GitHub</li>
                    <li>Full Calendar</li>
                    <li>MySQL</li>
                    <li>PHPMyAdmin</li>
                </ul>

                <h3>Avec qui</h3>
                <p>Traveau réalisés en mode projet, avec l'aide d'un camarade et de mon professeur</p>

                <h3>Où</h3>
                <p>
                    Effectué à : My Digital Shool Angers <br>
                    Service : Informatique et Développement Applicatif<br>
                </p>

                <h3>Annexes</h3>
                <div style="margin: 30px 0px;">
                    <a href="" class="gray-button" target="_blank">
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