<?php
//on lance la session
session_start();

//include_once('meta_header.php');
//include_once('nav.php'); 
include_once('lib/php/fonction.php');

//quand on appuie sur inscrire
if(isset($_POST['inscrire'])){

	//le contenu n'affiche rien
	$contenu = '';

	//on récupère les données entrées par l'utilisateur
	$email 				= secureData($_POST['email']);
	$pseudo 			= secureData($_POST['pseudo']);
	$mdp 				= md5(secureData($_POST['mdp'])); //md5 = le mot de passe est cripté
	$dateinscription 	= date('y-m-d');
	$admin 				= 0;

	//on se connecte
	$connection = connectBD();

	// si on se connecte
	if($connection){

		try{
			//on lance la transaction
			$connection-> BeginTransaction();

			//si connection, on prépare la requête
			$connection->exec('INSERT INTO users VALUES(null,"'.$email.'","'.$pseudo.'","'.$mdp.'","'.$dateinscription.'","'.$admin.'")'); 


			//validation de la transaction
			$connection->commit();

			//appel à la fonction qui connecte l'utilisateur
			//setSession($connection, $pseudo, $mdp);

			//on donne une valeur au contenu
			$contenu = '<red>Vous avez été inscrit(e) avec succès!</red>';
			//on renvoie à la page accueil
			header('refresh:3; url=index.php');

		}

		//si erreur
		catch(PDOException $e){
			//on annule la transaction
			$connection->rollback;
			//on affiche les erreurs
			$contenu = '<red> Erreur: Erreur lors de la requête, veuillez contacter votre administrateur!</red></br>';
			$contenu .= '<red>Erreur: '.$e->getMessage().'</red></br>';
			$contenu .= '<red>Erreur:'.$e->getCode().'</red></br>';


			//on quitte, on arrête l'execution q'il y a du code après
			exit();
		}
	}
	else{
		$contenu = '<red>ERREUR : Impossible de se connecter à la BD, Veuillez contacter votre administrateur!</red><br>';
	}
?>

<title>Acceuil</title>
<div id="content">

<?php
echo $contenu;
?>

</div>

<?php
	}
?>