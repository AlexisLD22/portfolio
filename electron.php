<!DOCTYPE html>
<html lang="fr">

<?php require('pages/include/head.php') ?>

<body class='home'>

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center title">
			Création d'un similateur immobilier avec electron
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
					<h1 class="page-title"></h1>
				</header>

				<p><img src="assets/images/ere.png" alt=""></p>

				<h3>Contexte</h3>
				<span>Ce projet a marqué mes débuts dans le portage de fichiers HTML, CSS et JS vers une application lourde. L'exploration des outils tels que npm et Electron a été particulièrement enrichissante, même si j'ai eu de multiples erreurs qui m'ont permis d'apprendre et de progresser. Cette expérience m'a ouvert de nouvelles perspectives quant à la manière de transformer des éléments web en applications autonomes et fonctionnelles.</span>

				<h3>Description des tâches</h3>
				<ul>
					<li>Création des pages HTML/CSS/JS</li>
					<li>Installation de npm et Electron avec Visual Studio Code</li>
					<li>Compilation des éléments en une application lourde</li>
					<li>Test et application</li>
				</ul>

				<h3>Moyens utilisés</h3>
				<ul>
					<li>Visual Studio</li>
					<li>GitHub</li>
					<li>Utilisation d'Electron pour compiler</li>
				</ul>

				<h3>Avec qui</h3>
				<p>Traveau réaliser seul et avec l'aide de mon professeur ou de mes camarades</p>

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