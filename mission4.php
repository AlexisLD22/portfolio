<!DOCTYPE html>
<html lang="fr">

<?php require('pages/include/head.php') ?>

<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center title">
		Travaux n°4
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
					<h1 class="page-title">Création du base de donnée workbench</h1>
				</header>

				<p><img src="assets/images/workbench logo.png" alt=""></p>

				<h3>Description des tâches</h3>
				<ul>
					<li>Installation de Mysql Worckbench</li>
					<li>Utilisation d'UML</li>
					<li>Création d'une base de donnée fictif</li>
					<li>Comprendre les liasons entre les différentes tables</li>
				</ul>

				<h3>Moyens utilisés</h3>
				<ul>
					<li>Utilisation de Mysql Workbench</li>
					<li>Utilisation de Drawio</li>
					<li>Site Web Microlead</li>
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