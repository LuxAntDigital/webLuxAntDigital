<?php require 'php/config.php' ?>
<?php require_once('php/security/decryption'); ?>

<?php
    $token = isset($_GET['id']) ? $_GET['id'] : '';
    $token = desencriptar($token);
    session_start();
    
    $consultaEmail = "SELECT email FROM clientes WHERE email='" . $token . "'";
    $resEmail = mysqli_query($conexion,$consultaEmail);
    while($email = mysqli_fetch_array($resEmail)){
        $_SESSION['email'] = $email['email'];
    }

    if($_SESSION['email'] == $token){
        include 'new-password.php';
        mysqli_close($conexion);
    }
    /*else{
        mysqli_close($conexion);
        session_destroy();
        echo '
            <script>
                window.location="login.php";
            </script>
        ';
    }*/

?>