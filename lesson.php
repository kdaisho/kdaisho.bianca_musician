<?php include 'header.php';?>
<body>
 	<div class="lessonBG">
 		<header>
 			<div class="headerDiv">
 				<a href="index.php" title="Home">
 					<img class="logo" src="images/bianca_logo_1.png" title="Logo" alt="Bianca's logo">
 				</a>
 				<div class="lang col2 col4_t col6_m">
	 				<a href="#" title="Français">FR</a>
	 				<a href="en/lesson.php" title="English">EN</a>
	 			</div>
	 			<div class="clearFloat"></div>
	 		</div>
 		</header>
 		<div class="drape">
		</div>
	 	<div class="showcase col7 col9_t col12_m">
			<?php include 'contact.php' ?>
		</div>
 		<session class="lesson">
 			<div class="col8 col12_m page_tag">
				<img src="images/lesson.svg" title="lesson" alt="lesson">
				<h1>Leçon</h1>
				<div class="clearFloat"></div>
			</div>
			<div class="description col8 col11_m">
				<p>Bianca enseigne aux personnes de tout âge. Vous pouvez en sa compagnie  suivre des cours de guitare, de clavier/piano, de chant (tout style). Elle excelle également en donnant des cours de  théorie musicale et de solfège.</p>
				<p>Vous pouvez suivre des cours privés, semi-privés. Des cours de groupe sont disponibles selon la demande. N'hésitez pas à communiquer avec elle pour plus de détails et pour toute question.</p>
				<p>Bianca croit profondément que chaque personne peut s’exprimer à travers la musique peu importe le niveau de connaissance. Le but ultime est de s’épanouir, d’apprendre et d’avoir beaucoup de plaisir !</p>
				<h4>
					Projets !<br />
					En recherche de collaboration ? Pour une composition, création sonore ou besoin d’une d’interprète ? <span class="contact_link">communiquez avec elle !</span>
				</h4>
				<button class="contact_link">S'inscrire aux cours</button>
			</div>
 		</session>
 		<span class="flank">
			<?php include 'aside.php';?>
		</span>
	<?php include 'footer.php'; ?>