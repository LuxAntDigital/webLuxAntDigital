<?php require "config.php"; ?>
<?php require "security/logRegistro.php"; ?>
<?php require_once('security/encryption'); ?>
<?php
session_start();


if($ataques > 5 && $baneado == 0){
    
    $regAlerta = "INSERT INTO alertas_registro VALUES('" . $_SERVER['REMOTE_ADDR'] . "', '" . date('U') . "', '" . $_SERVER['HTTP_USER_AGENT'] . "', '" . $_SERVER['REQUEST_URI'] . "', '" . $ataques . "', '0')";
    $resAlerta = mysqli_query($conexion,$regAlerta);
    $numAtaques = "UPDATE `alertas_registro` SET ataques= '" . $ataques . "', baneado= '" . $baneado . "' WHERE ip = '" . $_SERVER['REMOTE_ADDR'] . "'";
    $resNumAtaques = mysqli_query($conexion,$numAtaques);
    include "emails/alertaRegistro.php";
           
        //Insertar nuevo usuario en la base de datos comparando si el correo ya existe o no.
        $contador = 0;
        $conComparar = "SELECT email FROM clientes";
        $resComparar = mysqli_query($conexion,$conComparar);
        while($filaCompara = mysqli_fetch_array($resComparar)){
            if($filaCompara['email'] == $_SESSION['email']){
                $contador++;
                echo "<script>window.location = '../register.php'</script>";
            }
        }
        if($contador == 0){
            //Registro nuevo usuario
            $newUser = "INSERT INTO clientes VALUES (NULL, '" . $_SESSION['fullname'] . "','" . $_SESSION['lastname'] . "','" . $_SESSION['email'] . "' ,'" . encriptar($_SESSION['password']) . "','" . $_SESSION['wallet'] . "','0', '" . md5($_SESSION['email']) . "','0')";
            $resUser = mysqli_query($conexion, $newUser);
            //Añadirlo al whitelist
            $registraIP = "INSERT INTO whitelist VALUES('" . $_SESSION['email'] . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . $_SERVER['HTTP_USER_AGENT'] . "', '" . date('U') . "', '1')";
            $conRegistroIP = mysqli_query($conexion,$registraIP);

            //include 'emails/verificacion.php';
            session_destroy();
            echo "<script>alert('Register successfull, redirect to login')</script>";
            echo "<script>window.location = '../login.php'</script>";
            


        }
    }

elseif($baneado == 1){
    mysqli_close($conexion);
    session_destroy();
    echo "
            <script>
                window.location = '../login.php';
            </script>
        ";
}
else{     
    //Insertar nuevo usuario en la base de datos comparando si el correo ya existe o no.
    $contador = 0;
    $conComparar = "SELECT email FROM clientes";
    $resComparar = mysqli_query($conexion,$conComparar);
    while($filaCompara = mysqli_fetch_array($resComparar)){
        if($filaCompara['email'] == $_SESSION['email']){
            $contador++;
            session_destroy();
            echo "<script>window.location = '../register.php'</script>";

        }
    }
    if($contador == 0){
        $newUser = "INSERT INTO clientes VALUES (NULL, '" . $_SESSION['fullname'] . "','" . $_SESSION['lastname'] . "','" . $_SESSION['email'] . "' ,'" . encriptar($_SESSION['password']) . "','" . $_SESSION['wallet'] . "','0', '" . md5($_SESSION['email']) . "','0')";
        $resUser = mysqli_query($conexion, $newUser);

        $registraIP = "INSERT INTO whitelist VALUES('" . $_SESSION['email'] . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . $_SERVER['HTTP_USER_AGENT'] . "', '" . date('U') . "', '1')";
        $conRegistroIP = mysqli_query($conexion,$registraIP);

        //include 'emails/verificacion.php';
        session_destroy();
        echo "<script>alert('Register successfull, redirect to login')</script>";
        echo "<script>window.location = '../login.php'</script>";

    }
}
    mysqli_close($conexion);
?>
