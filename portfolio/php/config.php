<?php

$servidor = "";
$usuario = "";
$clave = "";
$baseDeDatos = "";

$conexion = mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
mysqli_set_charset($conexion, "utf8");


?>
