<?php

//on requière le fichier config pour l'affichage des erreurs!
require_once('config.php');

	//fonction de connection à la base de donnée
	function connectBD(){
		//essayer de se connecter à la base de donnée
		try{
			//on se connecte à la base de donnée
			$connection=new PDO('mysql:host=localhost; dbname=websitehf','root','');
					//$connection = new PDO('mysql:host=localhost; dbname=harramfatihaportfolio', 'root', '');

			//on prend l'UTF8 en compte
			$connection->exec('SET NAME UTF8');
			//renvoie les données de connection à la base de donnée
			return $connection;

		}
		//si erreur PDO renvoie une exception qui permet de capturer l'erreur
		catch (Exception $e){
			echo '<red>Impossible de se connecter à la base de donnée. Veuillez contacter votre administrateur!</red><br>';
			echo '<red>Erreur : '.$e->getMessage().'</red><br>';
			echo '<red> Erreur :'.$e->getCode().'</red><br>';

			//on sort de la connection 
			exit();

		}

	}

	//fonction pour sécuriser les données. trim (les espaces en trop et tabulation), stripslaches(élimination des slaches), htmlspecialchars (interdiction de caractères html)
	function secureData($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);

			//on renvoie les données sécurisés
			return $data;

	}

	//fonction de la création de session sur les donnéés ($data)
	function setSession($data){
		$_SESSION['id'] 				= $data['id'];
		$_SESSION['email'] 				= $data['email'];
		$_SESSION['pseudo'] 			= $data['pseudo'];
		$_SESSION['mdp'] 				= $data['mdp'];
		$_SESSION['dateinscription'] 	= $data['dateinscription'];
		$_SESSION['admin'] 				= $data['admin'];
	}


	//fonction de connection
	function login($connection, $pseudo, $mdp){
		try{

			//on lance la requête pour récupérer le login et le mot de passe de l'utilisateur
			$results=$connection->query('SELECT * FROM users WHERE pseudo="'.$pseudo.'" AND mdp="'.$mdp.'" ' );

			//on vérifie si on a des résultats, rowCount retourne le nombre de lignes affectées
			if($results -> rowCount()>0 ){

				//on lance la transaction
				$connection->beginTransaction();
				//valider la transaction
				$connection->commit();

				//on lance la requête pour récupérer le login et le mot de passe de l'utilisateur
				$results=$connection->query('SELECT * FROM users WHERE pseudo="'.$pseudo.'" AND mdp="'.$mdp.'" ' );

				//on place les données dans un tableau
				$array=$results->fetch(PDO::FETCH_ASSOC);

				//appel de la fonction 	qui créer la session de l'utilisateur
				//...a créer...
				setSession($array);

				//on termine le traitement de la requête en fermant le curseur d'analyse de résultats
				$results->closeCursor();


				//on ferme la connection
				unset($connection);

				//on créer les cookies pseudo et mdp
				if( !isset($_COOKIE['pseudo']) ){	
				//s'il n'y a pas de cookie login, on en créé (cookie login et cookie mot de passe d'une durée de 7 jours)				
				setcookie('pseudo',$_SESSION['pseudo'],$GLOBALS['duree'],$GLOBALS['chemin'],$GLOBALS['domaine'],$GLOBALS['https'],$GLOBALS['httponly']); 
				setcookie('mdp',$_SESSION['mdp'],$GLOBALS['duree'],$GLOBALS['chemin'],$GLOBALS['domaine'],$GLOBALS['https'],$GLOBALS['httponly']); 
				}

				//on retourne vrai
				return true;

			}
			else{
				//sinon on retourne faux
				return false;

			}

		}
		catch(Exception $e){

			echo '<red>ERREUR [0022] : Erreur lors de la requête. Veuillez contacter votre administrateur!</red>';
			echo '<red> Erreur : '.$e->getMessage().'</red><br>';
			echo '<red> Erreur : '.$e->getCode().'</red><br>';

			//on sort de la connection
			exit();
		}
	}

?>