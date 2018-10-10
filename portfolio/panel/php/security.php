<?php
//Parametro para evitar acceso al panel de usuario sin estar registrado.
if(empty($_SESSION['email'])){
    echo '
        <script>
            window.location = "login.php";
        </script>
    ';
}
?>

