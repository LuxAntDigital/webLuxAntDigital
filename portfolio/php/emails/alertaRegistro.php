<?php

ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "alert@luxantdigitalbank.com";
        $to = "guillermo@luxantdigitalbank.com";
        $subject = "Actividad sospechosa";
        $message = "Se están produciendo múltiples registros desde la siguiente IP: " . $_SERVER['REMOTE_ADDR'];
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
?>