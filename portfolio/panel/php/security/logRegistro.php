
<?php
$contador = 0;
$conIP = "SELECT * FROM blacklist WHERE ip = '" . $_SERVER['REMOTE_ADDR'] . "'";
$resIP = mysqli_query($conexion,$conIP);
while($blockIP = mysqli_fetch_array($resIP)){
    $contador++;
}
if($contador > 0){
    include 'emails/ataquePersuadido.php';
    error_reporting(0);
    session_destroy();
    mysqli_close($conexion);
    echo "<script>
                window.location='../login.php';
           </script>
    ";
}
else{
        //Cambiamos la petición de la consulta a registros y añadimos los campos que se van a guardar en la base de datos
    $peticion = "INSERT INTO actividad_registro VALUES (
        '" . date('U') . "',
        '" . $_SERVER['REMOTE_ADDR'] . "',
        '" . $_SERVER['HTTP_USER_AGENT'] . "',
        '" . $_SERVER['REQUEST_URI'] . "'
        )";
    $resultado = mysqli_query($conexion, $peticion);
    $ataques = 0;
    //Vamos a banear intentos de injección SQL
    $security = "SELECT * FROM actividad_registro WHERE ip ='" . $_SERVER['REMOTE_ADDR'] . "'";
    $resSecurity = mysqli_query($conexion,$security);
    while($banned = mysqli_fetch_array($resSecurity)){
        $ip = $banned['ip'];
        $ataques++;

    }

    $baneado = 0;

    if($ataques > 25){
        $baneado = 1;
        $listaNegra = "INSERT INTO blacklist VALUES ('" . $_SERVER['REMOTE_ADDR'] . "')";
        $guardarListaNegra = mysqli_query($conexion,$listaNegra);
    }
}



?>