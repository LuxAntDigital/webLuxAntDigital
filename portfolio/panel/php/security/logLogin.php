
<?php 
//Cambiamos la petición de la consulta a registros y añadimos los campos que se van a guardar en la base de datos
$peticion = "INSERT INTO seguridad VALUES (
    '" . date('U') . "',
    '" . date('Y') . "',
    '" . date('m') . "',
    '" . date('d') . "',
    '" . date('H') . "',
    '" . date('i') . "',
    '" . date('s') . "',
    '" . $_SERVER['REMOTE_ADDR'] . "',
    '" . $_SERVER['HTTP_USER_AGENT'] . "',
    '" . $_SERVER['REQUEST_URI'] . "',
    '0'
    )";
$resultado = mysqli_query($conexion, $peticion);
