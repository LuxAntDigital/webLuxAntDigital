<?php require_once("config.php"); ?>
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
                echo "<script>
                        alert('email ya existe');
                        window.location = '../register.php';
                    </script>";
            }
        }
        if($contador == 0){
            //Registrar nuevo usuario
            $newUser = "INSERT INTO clientes VALUES (NULL, '" . $_SESSION['fullname'] . "','" . $_SESSION['lastname'] . "','" . $_SESSION['email'] . "' ,'" . encriptar($_SESSION['password']) . "','" . $_SESSION['wallet'] . "','0', '" . md5($_SESSION['email']) . "','0')";
            $resUser = mysqli_query($conexion, $newUser);
            //Registrar su ip en el whitelist
            $registraIP = "INSERT INTO whitelist VALUES('" . $_SESSION['email'] . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . $_SERVER['HTTP_USER_AGENT'] . "', '" . date('U') . "', '1')";
            $conRegistroIP = mysqli_query($conexion,$registraIP);
            //Seleccionar nuevo usuario para operacion
            $conUsuario = "SELECT * FROM clientes WHERE email = '" . $_SESSION['email'] . "'";
            $resUsuario = mysqli_query($conexion,$conUsuario);
            while($buscaUsuario = mysqli_fetch_array($resUsuario)){
                $nuevoUsuario = $buscaUsuario['id'];
            }

            //Añadir compra al listado
            $newAmount = "INSERT INTO compras VALUES (NULL," . $nuevoUsuario . ", '" . date('U') . "', " . $_SESSION['tokens'] .  ", " . $_SESSION['total'] .  ", " . $_SESSION['moneda'] .  ", '0')";
            $finishInsert = mysqli_query($conexion,$newAmount);
            //registrar el id de compra para guardarlo en la tabla referral
            $conCompra = "SELECT * FROM compras WHERE idcliente = '" . $nuevoUsuario . "'";
            $resCompra = mysqli_query($conexion, $conCompra);
            while($buscaID = mysqli_fetch_array($resCompra)){
                $idcompra = $buscaID['id'];
            }
            
            //Añadir bonus al referido
            $bonus = $_SESSION['tokens'] * 10 / 100;
            $conBonus = "INSERT INTO referral VALUES('" . $idcompra . "', '". $_SESSION['referral'] . "', '" . $bonus . "')";
            $resBonus = mysqli_query($conexion,$conBonus);

            //include 'emails/verificacion.php';
            session_destroy();
            echo "<script>alert('Register successfull, now you can look the new amount of Tokens in your personal portfolio, redirect to login')</script>";
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
            echo "<script>alert('The email exist in our database');</script>";
            echo "<script>window.location = '../register.php'</script>";

        }
    }
    if($contador == 0){
        $newUser = "INSERT INTO clientes VALUES (NULL, '" . $_SESSION['fullname'] . "','" . $_SESSION['lastname'] . "','" . $_SESSION['email'] . "' ,'" . encriptar($_SESSION['password']) . "','" . $_SESSION['wallet'] . "','0', '" . md5($_SESSION['email']) . "','0')";
        $resUser = mysqli_query($conexion, $newUser);

        $registraIP = "INSERT INTO whitelist VALUES('" . $_SESSION['email'] . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . $_SERVER['HTTP_USER_AGENT'] . "', '" . date('U') . "', '1')";
        $conRegistroIP = mysqli_query($conexion,$registraIP);
        //Seleccionar nuevo usuario para operacion
        $conUsuario = "SELECT * FROM clientes WHERE email = '" . $_SESSION['email'] . "'";
        $resUsuario = mysqli_query($conexion,$conUsuario);
        while($buscaUsuario = mysqli_fetch_array($resUsuario)){
            $nuevoUsuario = $buscaUsuario['id'];
        }

        //Añadir compra al listado
        $newAmount = "INSERT INTO compras VALUES (NULL," . $nuevoUsuario . ", '" . date('U') . "', " . $_SESSION['tokens'] .  ", " . $_SESSION['total'] .  ", " . $_SESSION['moneda'] .  ", '0')";
        $finishInsert = mysqli_query($conexion,$newAmount);
        //registrar el id de compra para guardarlo en la tabla referral
        $conCompra = "SELECT * FROM compras WHERE idcliente = '" . $nuevoUsuario . "'";
        $resCompra = mysqli_query($conexion, $conCompra);
        while($buscaID = mysqli_fetch_array($resCompra)){
            $idcompra = $buscaID['id'];
        }
        
        //Añadir bonus al referido
        $bonus = $_SESSION['tokens'] * 10 / 100;
        $conBonus = "INSERT INTO referral VALUES('" . $idcompra . "', '". $_SESSION['referral'] . "', '" . $bonus . "')";
        $resBonus = mysqli_query($conexion,$conBonus);

        //include 'emails/verificacion.php';
        session_destroy();
        echo "<script>alert('Register successfull, now you can look the new amount of Tokens in your personal portfolio, redirect to login')</script>";
        echo "<script>window.location = '../login.php'</script>";

    }
}
    mysqli_close($conexion);
?>
