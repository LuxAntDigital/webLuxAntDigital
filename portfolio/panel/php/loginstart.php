<?php include 'security/config.php'; ?>
<?php require_once('security/encryption'); ?>
<?php

session_start();

$contador = 0;
$login = "SELECT * FROM administrators WHERE email = '" . $_POST['email'] . "' AND contrasena = '" . encriptar($_POST['password']) . "'";
$start = mysqli_query($conexion, $login);
while($fila = mysqli_fetch_array($start)){
    $contador++;
    $_SESSION['email'] = $fila['email'];
}

if($contador > 0){
    echo '
        <script>
            alert("bien");
            window.location = "../index.php";
        </script>
    ';
}
else{
    echo '
        <script>
        alert("mal");
            window.location = "../login.php";
        </script>
    ';
}


?>