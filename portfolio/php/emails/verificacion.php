<?php
error_reporting(0);
$conCodigo = "SELECT * FROM clientes WHERE email = '" . $_SESSION['email'] . "'";
$resCodigo = mysqli_query($conexion,$conCodigo);
while($codigo = mysqli_fetch_array($resCodigo)){
        $miCodigo = $codigo['referral'];
}

ini_set( 'display_errors', 1 );
        error_reporting(0);
        $from = "support@luxantdigitalbank.com";
        $to = $_SESSION['email'];
        $subject = "Account Activation - ALUX BANK";
        $message = "Welcome to Alux Bank! For activate your account please click on this URL: https://luxantdigitalbank.com/portfolio/activate.php?id=" . $miCodigo;
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
?>