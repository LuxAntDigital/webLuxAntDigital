<?php
$user = 0;
$conUsuario = "SELECT * FROM clientes WHERE id = '" . $_SESSION['usuario'] . "'";
$resUsuario = mysqli_query($conexion, $conUsuario);
while($usuario = mysqli_fetch_array($resUsuario)){
    $user = $usuario['nombre'] . " " . $usuario['apellidos'];
}

ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "alert@luxantdigitalbank.com";
        $to = "services@luxantdigitalbank.com";
        $subject = "Compras pendientes de verificar";
        $message = "Nombre: " .  $user . " - Fecha: " . date("M d Y H:i:s")  . " - Tokens comprados: " . $_SESSION['tokens'] .  " - Por importe: " . $_SESSION['total'] .  " " . $_SESSION['moneda'] .  "";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
?>