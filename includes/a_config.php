<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/login.php":
			$CURRENT_PAGE = "Login"; 
			$PAGE_TITLE = "Iniciar Sesión";
			break;
		case "/contacto.php":
			$CURRENT_PAGE = "Contacto"; 
			$PAGE_TITLE = "Contáctanos";
			break;
		case "/juegos.php":
			$CURRENT_PAGE = "Juegos"; 
			$PAGE_TITLE = "Juegos";
			break;											
		default:
			$CURRENT_PAGE = "Index";
<<<<<<< HEAD
			$PAGE_TITLE = "El Granizo Web Meteorológica Nacional";
=======
			$PAGE_TITLE = "ElGranizo - Web de Meteorología";
>>>>>>> 8497f09b91ec4d28974d6ed7409d369dbda0f805
	}
?>