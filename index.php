<?php
//on lance la session
session_start();

include_once('meta_header.php');
include_once('nav.php'); 
 ?>

<title>Acceuil</title>
</head>
<body>
	<!--<h1 id="tiha"><span id="f">F</span><span id="a1">A</span><span id="t">T</span><span id="i">I</span><span id="h">H</span><span id="a">A</span></h1>-->
	<div id="content">

		<div id="acceuil">
		<h1 id="moi">
			Hi, I'm<br> <span id="h2">H</span><span id="a_nom">A</span><span id="r">R</span><span id="r2">R</span><span id="a_nom2">A</span><span id="m">M</span> <span id="f">f</span><span id="a1">a</span><span id="t">t</span><span id="i">i</span><span id="h">h</span><span id="a3">a</span>.
		</h1>

		
			<div id="citation">
				<h2 id="cit1">« Un peu de passion augmente l’esprit, beaucoup l’éteint. »<br>
				<i>Stendhal</i></h2>

				<h2 id="cit2">« La vocation, c'est avoir pour métier sa passion. »<br>
				<i>Stendhal</i></h2>

				<h2 id="cit3">« Rien de grand ne s’est accompli dans le monde sans passion. »<br>
				<i>Friedrich Hegel</i></h2>
			</div>

			<div id="pic">
				<img src="img/fh.jpg" alt="profil" >
			</div>
		</div>

		<!--vide-->
		<span id="vide"></span>

		<!-- présentation -->

		<div id="presentation">
			<h2 class="titre"><red>présentation</red></h2>
			
			<p> Je Suis actuellement <red>étudiante en Web Development</red>. <br><br>
			Bruxelloise de <red>37 ans</red>, maman de deux enfants, j'ai décidé de me ré-orienté et reprendre mes études. <red>Le Web</red> a été une évidence pour moi, cela représente
			la continuité logique de mon parcours proffessionel. </p>
			<p><red>Ayant travaillé</red> dans la publicité en tant que Print Production Manager et Account Manager, j’ai toujours aimé allier <red>technique et créativité</red>. <br></br>
			<red>A présent</red>, je souhaite percer en tant que <red>Web Developer</red> pour un aboutissement complet de mon expérience et l’ouverture qu’offre ce métier sur <red>les technologies de l’information et de la communication</red>.<br>
			<red>Passion, </red>apprentissage continu, intégrité, challenge, sont mes maîtres-mots pour un épanouissement au travail.</p>
			<p>Je suis actuellement à la recherche d'un stage, d'une durée de 6 semaines, en tant que Front-end Web Developper.</p>
		</div>

		<div id="cv">
			<h2 class="titre"><red>Curiculum Vitae</red></h2>
			<a href="img/cv.pdf"> <span id="telecharger"><red>Télécharger le CV</red></span><img id="img_cv" src="img/cv.png"   alt="cv"></a>

			


		</div>

</div>

<?php
include_once('script_js.php');
?>
</body>
</html>