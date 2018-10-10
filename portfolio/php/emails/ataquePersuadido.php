<?php
ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "alert@luxantdigitalbank.com";
        $to = "guillermo@luxantdigitalbank.com";
        $subject = "Ataque Persuadido";
        $message = "Se ha bloqueado la siguiente IP atacante: " . $_SERVER['REMOTE_ADDR'];
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
?>