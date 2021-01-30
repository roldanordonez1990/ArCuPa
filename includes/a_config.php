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

			$PAGE_TITLE = "ElGranizo - Web de Meteorología";

	}
?>