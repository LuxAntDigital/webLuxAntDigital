<?php
ini_set( 'display_errors', 1 );
        error_reporting(0);
        $from = "support@luxantdigitalbank.com";
        $to = $email;
        $subject = "Recovery Password";
        $message = "Password recovery has been requested, if it has been you; click on the following link: https://luxantdigitalbank.com/portfolio/change-password.php?id=" . $token;
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
?>