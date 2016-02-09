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
				<p>
					J’enseigne à toutes âge depuis 2001. Cours de guitare, de clavier/piano, de chant (tous style), théorie musicale et solfège. Cours privé, semi-privé et de groupe disponible selon la demande. Hésitez pas à communiquer avec moi pour plus de détails et pour toutes questions concernant.
				</p>
				<p>
					Je crois que chaque personne peu s’exprimé à travers la musique peu importe leur niveau de connaissances. Le but ultime est de s’épanouir, d’apprendre et d’avoir beaucoup de plaisir !
				</p>
				<h4>
					Projets:<br />
					En recherche de collaboration? Que sa soit faire une composition, creation sonore ou besoin d’une d’interprète, <span class="contact_link">communiquez avec moi !</span>
				</h4>
				<button class="contact_link">Appliquer pour les cours</button>
			</div>
 		</session>
 		<span class="flank">
			<?php include 'aside.php';?>
		</span>
	<?php include 'footer.php'; ?>