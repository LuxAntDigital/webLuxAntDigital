<? require 'php/config.php' ?>
<?php

$id = $_GET['id'];

$consultaIP = "SELECT * FROM clientes WHERE referral = '" . $id . "'";
$resolverIP = mysqli_query($conexion, $consultaIP);
while($ip = mysqli_fetch_array($resolverIP)){
    $email = $ip['email'];
}

$registraIP = "UPDATE whitelist SET validada='1' WHERE emailcliente = '" . $email . "'";
$registrandoIP = mysqli_query($conexion,$registraIP);

?>
<script>
    window.location = "login.php";
</script>