<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/login.php":
			$CURRENT_PAGE = "Login"; 
			$PAGE_TITLE = "ElGranizo - Login";
			break;
		case "/contacto.php":
			$CURRENT_PAGE = "Contacto"; 
			$PAGE_TITLE = "ElGranizo - Contacto";
			break;
		case "/juegos.php":
			$CURRENT_PAGE = "Juegos"; 
			$PAGE_TITLE = "El Granizo - Juegos";
			break;
		case "/radar.php":
			$CURRENT_PAGE = "Radar"; 
			$PAGE_TITLE = "El Granizo - Radar";
		break;									
		case "/satelite.php":
			$CURRENT_PAGE = "Satelite"; 
			$PAGE_TITLE = "El Granizo - Satelite";
		break;	
		case "/rayos.php":
			$CURRENT_PAGE = "Rayos"; 
			$PAGE_TITLE = "ElGranizo - Rayos";
			break;
		case "/masasdeaire.php":
			$CURRENT_PAGE = "MasasDeAire"; 
			$PAGE_TITLE = "ElGranizo - Masas de Aire";
			break;
		case "/municipio.php":
			$CURRENT_PAGE = "Municipio"; 
			$PAGE_TITLE = "El Granizo - Municipio";
			break;
		case "/provincias.php":
			$CURRENT_PAGE = "Provincias"; 
			$PAGE_TITLE = "El Granizo - Provincias";
		break;									
		case "/ccaa.php":
			$CURRENT_PAGE = "CCAA"; 
			$PAGE_TITLE = "El Granizo - CCAA";
		break;	
		case "/frentes.php":
			$CURRENT_PAGE = "Frentes"; 
			$PAGE_TITLE = "ElGranizo - Frentes";
			break;
		case "/temperaturas.php":
			$CURRENT_PAGE = "Temperaturas"; 
			$PAGE_TITLE = "ElGranizo - Temperaturas";
			break;
		case "/precipitacion.php":
			$CURRENT_PAGE = "Precipitacion"; 
			$PAGE_TITLE = "El Granizo - Precipitacion";
			break;
		case "/nubes.php":
			$CURRENT_PAGE = "Nubes"; 
			$PAGE_TITLE = "El Granizo - Nubes";
		break;									
		case "/paisajes.php":
			$CURRENT_PAGE = "Paisajes"; 
			$PAGE_TITLE = "El Granizo - Paisajes";
		break;	
		case "/videos.php":
			$CURRENT_PAGE = "Videos"; 
			$PAGE_TITLE = "ElGranizo - Videos";
			break;
		case "/avisosNacionales.php":
			$CURRENT_PAGE = "AvisosNacionales"; 
			$PAGE_TITLE = "ElGranizo - Avisos Nacionales";
			break;
		case "/avisosccaa.php":
			$CURRENT_PAGE = "Avisosccaa"; 
			$PAGE_TITLE = "El Granizo - Avisos Comunidades Autónomas";
			break;
		case "/avisosPrecipitacion.php":
			$CURRENT_PAGE = "avisosPrecipitacion"; 
			$PAGE_TITLE = "El Granizo - AvisosPrecipitacion";
		break;									
		case "/noticiasNacioanles.php":
			$CURRENT_PAGE = "NoticiasNacionales"; 
			$PAGE_TITLE = "El Granizo - NoticiasNacionales";
		break;
		case "/noticiasProvinciales.php":
			$CURRENT_PAGE = "NoticiasProvinciales"; 
			$PAGE_TITLE = "ElGranizo - NoticiasProvinciales";
			break;
		case "/noticiasLocales.php":
			$CURRENT_PAGE = "NoticiasLocales"; 
			$PAGE_TITLE = "ElGranizo - NoticiasLocales";
			break;
		case "/terminosLegales.php":
			$CURRENT_PAGE = "TerminosLegales"; 
			$PAGE_TITLE = "El Granizo - TerminosLegales";
		break;										
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "El Granizo";
	}

	//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('437373052171-9ofeqqbem1q7jj40umtng47v7gmbs4iv.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('yVxgPBat4WZMqZ7tTm-9sHMF');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://'.$_SERVER['SERVER_NAME'].'/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

$login_button = '';
?>