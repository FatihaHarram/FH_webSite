<?php
//on lance la session
session_start();

include_once('lib/php/fonction.php');


if(isset($_POST['connecte'])){

	//le contenu de base est vide
	$contenu = '';

	//on se connecte à la base de donnée
	$connection = ConnectBD();

	//on récupère les données sécurisées du formulaire 
	$pseudo = secureData($_POST['pseudo']);
	$mdp = md5(secureData($_POST['mdp']));

	//on connecte l'utilisateur grace à la fonction
	$connecte = login($connection, $pseudo, $mdp);

	//si connection
	if ($connecte){
		//redirection vers la page index.php
		//header('refresh:0;url=index.php');
						
		//on prépare le contenu à afficher
		$contenu = '<red>Bonjour '.$_SESSION['pseudo'].', Vous avez été connecté avec succès!</red>';
	}
	else{
		//renvoi vers la page du formulaire de connection
		//header('refresh:1;url=connection.php');
	}

	?>
<title>Connection</title>

<?php
include_once('meta_header.php');
echo '<h1>'.$contenu.'</h1>';



?> 
</body>
</html>
<?php
	}
	else
	{
		//accès à la page sans passer par le formulaire -> redirection vers la page d'index
		header('refresh:0;url=index.php');
	}
?>