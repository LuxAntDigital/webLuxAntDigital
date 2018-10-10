<?php 
error_reporting(0);
session_start();
//$langSelect = "En";
$langPanel = "EN";
$panel = "en";
// Comprobamos la variable get
if ($_GET["lang"]) { 
			switch ($_GET["lang"]) {
				// inglés
				case 'en':
					$_SESSION["lang"]=$_GET["lang"];
					$langPanel = "EN";
					$langSelect = "En";
					break;
				// español
				case 'es':
					$_SESSION["lang"]=$_GET["lang"];
					$langPanel = "ES";
					$langSelect = "Es";
					break;
				case 'english':
					$_SESSION["lang"]=$_GET["lang"];
					$langPanel = "EN";
					$langSelect = "En";
					break;
                // ruso
                case 'ru':
					$_SESSION["lang"]=$_GET["lang"];
					$langPanel = "EN";
					$langSelect = "Ru";
                    break;
                // en inglés por defecto
				default:
					$_SESSION["lang"]="english";
					$langPanel = "EN";
					$langSelect = "Lang";
					break;

			}

} elseif (!$_SESSION["lang"]) { 
	// Si el get no existe definimos el inglés
$_SESSION["lang"]="english";
$langPanel = "EN";
} 
// incluimos el idioma con las definiciones 
include("".$_SESSION["lang"].".php"); 


//Ocultar idiomas seleccionados

if($langSelect == En){
	$langHiddenEn = "hidden='true'";
	$langHiddenEs = "";
	$langHiddenRu = "";
}
else if($langSelect == Es){
	$langHiddenEs = "hidden='true'";
	$langHiddenEn = "";
	$langHiddenRu = "";
}
else if($langSelect == Ru){
	$langHiddenRu = "hidden='true'";
	$langHiddenEs = "";
	$langHiddenEn = "";
}
?> 