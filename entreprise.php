<!DOCTYPE html>
<html lang="fr">

<?php require('pages/include/head.php') ?>

<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center title">
			Entreprise
		</h1>
	</div>
    <?php require('pages/include/nav.php') ?>
</header>

<main>

    <div class="container">
		
		<div class="row section featured topspace">
			<h2 class="section-title"><span>Marport France</span></h2>
			<aside class="col-md-4 sidebar sidebar-left">
				<div class="row widget">
					<div class="col-xs-12">
						<p><img src="assets/images/marport-france.jpg" alt=""></p>
					</div>
				</div>
			</aside>	

			<article class="col-sm-8 maincontent">
				<h3>Présentation</h3>
				<p>
                Marport a été fondée en 1996 en Islande pour développer des systèmes de surveillance acoustique pour la pêche commerciale en haute mer. Les activités commerciales étaient dirigées par Oskar Axelsson à Reykjavik, tandis que l'ingénierie et la production de capteurs étaient externalisées à Stout Marine Inc., dirigée par Merle Stout à Everett, Washington. En 2001, après le décès de Merle Stout, Marport Iceland a acquis Stout Marine pour assurer la continuité des affaires. En 2005, une équipe dirigée par Didier Caute a démontré les avantages du Sonar Défini par Logiciel, conduisant à une expansion de l'entreprise. En 2013, Marport Deep Sea Technology a été acquise par Airmar Technology, avec un historique de collaboration réussie, maintenant axée sur le développement rapide de nouveaux produits et l'amélioration des délais de livraison et des canaux de distribution.
                </p>
				<div>
					<a href="https://www.marport.com" class="gray-button" target='_blank'>
						<span style="padding: 10px; border: 2px solid #333; border-radius: 3px; background-color: #333; ">
                        <i class="fa fa-solid fa-globe" style='color:white;'></i>
						</span>
						<span style="color: #333; margin-left: 10px; font-size: 15px;">Plus d'Info</span>
					</a>
				</div>
			</article>
		</div>
        <div class="row section featured topspace">
			<h2 class="section-title"><span>Produit</span></h2>
			<article class="col-sm-8 maincontent">
				<div style='margin:100px 0px;'>
                    <h4 style='text-align:center;'>
                        Le Seine Explorer transmet les données vers la timonerie pendant qu'un filet tournant est largué et tout au long de l'opération de pêche
                    </h4>
                </div>
			</article>
            <aside class="col-md-4 sidebar sidebar-left">
				<div class="row widget">
					<div class="col-xs-12">
						<p><img src="assets/images/product1.png" alt=""></p>
					</div>
				</div>
			</aside>
            <aside class="col-md-4 sidebar sidebar-left">
				<div class="row widget">
					<div class="col-xs-12">
						<p><img src="assets/images/product2.png" alt=""></p>
					</div>
				</div>
			</aside>
            <article class="col-sm-8 maincontent">
				<div style='margin:100px 0px;'>
                    <h4 style='text-align:center;'>
                    Un capteur de profondeur fait exactement ce que son nom indique, mais ceux-ci font tellement plus.
                    </h4>
                </div>
			</article>
		</div>
    </div>
</main>


<?php require('pages/include/footer.php') ?>

<?php require_once('pages/include/script.php')?>
</body>
</html>