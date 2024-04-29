<!DOCTYPE html>
<html lang="fr">

<?php require('pages/include/head.php') ?>

<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center title">
			Traveau n°7
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
					<h1 class="page-title">Fonction en C# avec le framework DotNet</h1>
				</header>

				<p><img src="assets/images/c.jpg" alt=""></p>

				<h3>Description des tâches</h3>
				<ul>
					<li>Installation du framework DotNet</li>
					<li>Ajouts des partie de code dans des fichiers spécifique</li>
					<li>Programation de la fonction</li>
				</ul>

				<h3>Moyens utilisés</h3>
				<ul>
					<li>Utilisation de l'IDE Visual Studio</li>
					<li>Forum et vidéo</li>
					<li>SVN</li>
				</ul>

				<h3>Avec qui</h3>
				<p>Traveau réaliser seul et avec de l'aide de mon tuteur</p>

				<h3>Contexte</h3>
				<p>
					Effectué à : Marport France à Ploemeur <br>
					Service : Développement Applicatif et Web<br>
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