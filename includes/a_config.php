<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/login.php":
			$CURRENT_PAGE = "Login"; 
			$PAGE_TITLE = "ElGranizo";
			break;
		case "/contacto.php":
			$CURRENT_PAGE = "Contacto"; 
			$PAGE_TITLE = "ElGranizo";
			break;
		case "/juegos.php":
			$CURRENT_PAGE = "Juegos"; 
			$PAGE_TITLE = "El Granizo";
			break;									
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "El Granizo";

	}
?>