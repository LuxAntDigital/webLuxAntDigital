<?php
error_reporting(0);
$conCodigo = "SELECT * FROM clientes LEFT JOIN whitelist ON whitelist.emailcliente = clientes.email WHERE email = '" . $_SESSION['email'] . "'";
$resCodigo = mysqli_query($conexion,$conCodigo);
while($codigo = mysqli_fetch_array($resCodigo)){
        $miCodigo = $codigo['referral'];
        $email = $codigo['email'];
}

$registraIP = "INSERT INTO whitelist VALUES('" . $email . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . $_SERVER['HTTP_USER_AGENT'] . "', '" . date('U') . "', '0')";
$conRegistroIP = mysqli_query($conexion,$registraIP);

ini_set( 'display_errors', 1 );
        error_reporting(0);
        $from = "support@luxantdigitalbank.com";
        $to = $_SESSION['email'];
        $subject = "Alert new IP - ALUX BANK";
        $message = "The IP: " . $ip . "has try to connect with you credentials. If these IP it's yours, can authorize in these URL: https://luxantdigitalbank.com/portfolio/authorize.php?id=" . $miCodigo;
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
?>