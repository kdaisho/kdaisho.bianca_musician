<?php include 'header.php';?>
<body>
 	<div class="animate-area-music">
 		<header>
 			<div class="headerDiv">
 				<a href="index.php" title="Home">
 					<img class="logo" src="images/bianca_logo_1.png" title="Logo" alt="Bianca's logo">
 				</a>
 				<div class="lang col2 col4_t col6_m">
	 				<a href="#" title="Français">FR</a>
	 				<a href="en/music.php" title="English">EN</a>
	 			</div>
	 			<div class="clearFloat"></div>
	 		</div>
 		</header>
 		<div class="drape">
		</div>
	 	<div class="showcase col7 col9_t col12_m">
			<?php include 'contact.php' ?>
		</div>
		<section class="music">
			<div class="col8 col12_m page_tag">
				<img src="images/music.svg" title="music" alt="music">
				<h1>Musique</h1>
				<div class="clearFloat"></div>
			</div>
			<div class="media col8 col10_t col12_m">
				<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/184079152&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
			</div>
			<div>
				<div class="song col8 col10_t col11_m">
					<a class="get_music off" href="#" data-pos="2" title="play">
						<button class="play_button">
						</button>
						<p class="song_title">Kupukupu di bawa hujan <span class="sub">(Papillon sous la pluie) </span><span class="time">[06:05]</span></p>
					</a>
					<div class="clearFloat"></div>
				</div>
			</div>
			<div>
				<div class="song col8 col10_t col11_m">
					<a class="get_music active" href="#" data-pos="1" title="play">
						<button class="play_button">
						</button>
						<p class="song_title">Synapse Hyokkays Kaventa <span class="time">[07:27]<span></p>
					</a>
					<div class="clearFloat"></div>
				</div>
			</div>
			<div>
				<div class="song col8 col10_t col11_m">
					<a class="get_music active" href="#" data-pos="0" title="play">
						<button class="play_button">
						</button>
						<p class="song_title">Synapse Rupture Abstrueuse <span class="time">[08:44]</span></p>
					</a>
					<div class="clearFloat"></div>
				</div>
			</div>
		</setion>
		<span class="flank">
			<?php include 'aside.php';?>
		</span>
	<?php include 'footer.php'; ?>