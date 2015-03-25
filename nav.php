<?php
include_once('meta_header.php');

?>

<div id="nav">
	<ul class="nav">
		<li><a class="a_index" href="index.php#acceuil">ACCUEIL</a></li>
		<li><a class="a_pres" href="index.php#presentation">PRESENTATION</a></li> 
		<li><a class="a_cv" href="index.php#cv">CURRICULUM VITAE</a></li>
		<li><a class="aNav" href="projet.php">MES PROJETS<a/></li>
		<!--<li><a class="aNav" href="inscription.php">INSCRIPTION<a/></li>
		<li><a class="aNav" href="connection.php">CONNECTION<a/></li>-->
		<li><a class="aNav" href="coments.php">COMMENTAIRES<a/></li>
		<li><a class="aNav" href="contact.php">CONTACT</a></li>
		<?php
		if(isset($_SESSION['id'])){

			echo '<li><a class="aNav" href="deconnection.php">SE DECONNECTER</a></li>';

			if($_SESSION['admin'] == 1){
				echo '<li><a class="aNav" href="Admin.php">ADMIN</a></li>';
			}
		}
		else{

		}

		?>
	</ul>
</div>