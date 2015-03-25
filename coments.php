<?php
//on lance la session
//session_start();

if( isset($_SESSION['id']) )
	{
		// l'utilisateur est connecté, pas besoin de s'inscrire
		header ('refresh:0;url=index.php');
		//echo'Vous êtes déjà inscrit!</br>';
	}	
	else{

include_once('meta_header.php');
include_once('nav.php'); 
include_once('lib/php/fonction.php');
 ?>

<title>Acceuil</title>
</head>
<body>
	<!--<h1 id="tiha"><span id="f">F</span><span id="a1">A</span><span id="t">T</span><span id="i">I</span><span id="h">H</span><span id="a">A</span></h1>-->
	<div id="content">

		
		<h1 id="com">
			Laissez un commentaire!
		</h1>
		<div id="formulaires">
			<div id"">
				<p id="inscr"><i><red>déja inscrit(e)? Se connercter</red></i></p>

				<form id="inscription" name="inscription" method="POST" action="inscriptionTRT.php">
					<fieldset>
						<legend><red><h2>INSCRIPTION</h2></red></legend>

						<label for="email" >E-MAIL</label>
						<input class=""  id="email" type="mail" name="email" value="" maxlength="20" placeholder=" Votre mail ici" /><br>

						<label for="pseudo" >PSEUDO</label>
						<input class=""  id="pseudo" type="text" name="pseudo" value="" maxlength="20" placeholder=" Votre pseudo ici" /><br>

						<label for="mdp" >MOT DE PASSE</label>
						<input class=""  id="mdp" type="text" name="mdp" value="" maxlength="20" placeholder=" Votre mot de passe ici" /><br><br>

						<input type="submit" name="inscrire" value="S'INSCRIRE" id="inscrire">

					</fieldset>	
				</form>
			</div>
			<br><br><br><br>

			<div id"connection">
				
				<form id="connection" name="connection" method="POST" action="connectionTRT.php">

					<fieldset>
						<legend><red><h2>CONNECTION</h2></red></legend>
						<label for="pseudo" >PSEUDO</label>
						<input class=""  id="pseudo" type="text" name="pseudo" value="" maxlength="20" placeholder=" Votre pseudo ici" /><br>

						<label for="mdp" >MOT DE PASSE</label>
						<input class=""  id="mdp" type="text" name="mdp" value="" maxlength="20" placeholder=" Votre mot de passe ici" /><br><br>

						<input type="submit" name="connecte" value="SE CONNECTER" id="connecte">

					</fieldset>
				</form>
			</div>
		</div>


	

		
</div>
 
<?php 
include_once('script_js.php');
}
?>
</body>
</html>