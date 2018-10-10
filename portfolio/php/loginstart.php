<?php include 'config.php'; ?>
<?php require_once('security/encryption'); ?>
<?php

session_start();


$contador = 0;
$activate = 0;
$login = "SELECT * FROM clientes LEFT JOIN whitelist ON whitelist.emailcliente = clientes.email WHERE email = '" . $_POST['email'] . "' AND contrasena = '" . encriptar($_POST['password']) . "'";
$start = mysqli_query($conexion, $login);
while($fila = mysqli_fetch_array($start)){
    $contador++;
    $_SESSION['email'] = $fila['email'];
    $_SESSION['usuario'] = $fila['id'];
    $activate = $fila['activo'];
    $ip = $fila['ipcliente'];
}

$ipStatus = "SELECT * FROM whitelist WHERE ipcliente = '" . $_SERVER['REMOTE_ADDR'] . "'";
$resIP = mysqli_query($conexion,$ipStatus);
while($ipActiva = mysqli_fetch_array($resIP)){
    $ipLogin = $ipActiva['validada'];
    $navegadorLogin = $ipActiva['navegador'];
    $dirIP = $ipActiva['ipcliente'];
    $emailIP = $ipActiva['email'];
}
$loginFail = 0;
$conLoginFail = "SELECT * FROM loginfail WHERE email = '" . $_POST['email'] . "'";
$resLoginFail = mysqli_query($conexion,$conLoginFail);
while($login = mysqli_fetch_array($resLoginFail)){
    $loginFail = $login['intentos'];
    $email = $login['email'];
}
if($loginFail <= 10){
    if($contador > 0 /*&& $activate == 1 && $ipLogin == 1*/){
        $conBorrarEmail = "DELETE FROM loginfail WHERE email = '" . $email . "'";
        $resBorrarEmail = mysqli_query($conexion, $conBorrarEmail);
        mysqli_close($conexion);
        echo '
            <script>
                window.location = "../index.php";
            </script>
       ';
    }
    /*elseif($activate == 0){
        echo '
            <script>
                alert("Ha surgido un problema, le hemos enviado un correo con instrucciones para poder solucionarlo");
                window.location = "../login.php";
            </script>
        ';
    }
    elseif($navegadorLogin !== $_SERVER['HTTP_USER_AGENT'] && $emailIP !== $_SESSION['email'] && $dirIP !== $_SERVER['REMOTE_ADDR']){
        include 'emails/ipActivate.php';
        echo '
            <script>
                alert("Ha surgido un problema, le hemos enviado un correo con instrucciones para poder solucionarlo");
                window.location = "../login.php";
            </script>
        ';
    }*/
    else{
        if($loginFail == 0){
            $loginFail++;
            $conNewFail = "INSERT INTO loginfail VALUES('" . $_POST['email'] . "','" . $loginFail . "')";
            $resNewFail = mysqli_query($conexion,$conNewFail);
            mysqli_close($conexion);
        }
        else{
            $loginFail++;
            $conSumar = "UPDATE loginfail SET intentos = '" . $loginFail . "' WHERE email = '" . $_POST['email'] . "'";
            $resSumar = mysqli_query($conexion,$conSumar);
            mysqli_close($conexion);
        }
        echo '        
            <script>
                alert("usuario o contraseña erroneas");
                window.location = "../index.php";
            </script>
       ';
    }
}
else{
    echo '        
            <script>
                alert("block user for too login failed intents, please recovery your password for unlock");
                window.location = "../recovery.php";
            </script>
       ';
}



?>
