<?php  

	// Base URL:
	const URL = "http://localhost/Grossiste/" ;

	// Initializer Loader:
	include "controls/Loader.php" ;


	if(isset($_GET['action'])) {
		if($_GET['action'] == "enregistrement_produit") {
			include "controls/enregistrement_produit.php" ;
		}
		else if($_GET['action'] == 'enregistrement_produit_success') {
			Loader::loadViews("stock") ;
		}
		else if($_GET['action'] == 'supprimer_produit') {
			include "controls/supprimer_produit.php" ;
		}
		else if($_GET['action'] == 'suppression_produit_success') {
			Loader::loadViews("stock") ;
		}
		else if($_GET['action'] == 'refresh') {
			include "controls/refresh.php" ;
		}
		else if($_GET['action'] == "take_unity") {
			include "controls/take_unity.php" ;
		}
	}
	else {
		Loader::loadViews("stock") ;
	}


?>