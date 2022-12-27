<?php 
	
	class Loader {
		public static function loadViews($page) {
			include "views/".$page.".php" ;
		}
		public static function loadCSS($css) {
			for($i = 0; $i < count($css); $i++) {
				echo "<link rel='stylesheet' href='".URL."assets/css/".$css[$i].".css'/>" ;	
			}
		}
		public static function loadJS($js) {
			for($j = 0; $j < count($js); $j++) {
				echo "<script src='".URL."assets/js/".$js[$j].".js'></script>" ;
			}
		}
	}

 ?>