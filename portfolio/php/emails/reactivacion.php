<?php

ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "support@luxantdigitalbank.com";
        $to = $_GET['email'];
        $subject = "Account Activation - ALUX BANK";
        $message = "Welcome to Alux Bank! For activate your account please click on this URL: https://luxantdigitalbank.com/portfolio/activate.php?id=" . $codigo;
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
?>