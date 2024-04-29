<!DOCTYPE html>
<html lang="fr">
<?php require('pages/include/head.php') ?>
<body class="home">
<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center title">
            Travailler en mode projet
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
                    <h1 class="page-title">Travailler en mode projet</h1>
                </header>
                <h3>Sous-Compétence</h3>
                <ul>
                    <li>Analyser les objectifs et les modalités d’organisation d’un projet</li>
                    <li>Planifier les activités</li>
                    <li>Évaluer les indicateurs de suivi d’un projet et analyser les écarts</li>
                </ul>
            </article>
            <!-- /Article -->
            <div class="row section recentworks topspace">
			
                <h2 class="section-title"><span>Projet Relier</span></h2>
                
                <div class="thumbnails recentworks row">
                    
                    
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <a class="thumbnail" href="canin.php">
                            <span class="img">
                                <img src="assets/images/canin.png" alt="">
                                <span class="cover"><span class="more">Plus d'Info &rarr;</span></span>
                            </span>
                            <span class="title">Création d'un site pour utilisateur Toiletage Canin</span>
                        </a>
                        <!-- <span class="details"><a href="">Web design</a> | <a href="">Logotype</a></span> -->
                        <h4></h4>
                        <p></p>
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <a class="thumbnail" href="fluxrss.php">
                            <span class="img">
                                <img src="assets/images/laravel.png" alt="">
                                <span class="cover"><span class="more">Plus d'Info &rarr;</span></span>
                            </span>
                            <span class="title">Site de veille avec Laravel</span>
                        </a>
                        <!-- <span class="details"><a href="">Web design</a> | <a href="">Logotype</a></span> -->
                        <h4></h4>
                        <p></p>
                    </div>
                </div>
            </div>
		</div> <!-- /section -->
    </div>	<!-- /container -->
</main>


<?php require('pages/include/footer.php') ?>

<?php require_once('pages/include/script.php')?>
</body>
</html>