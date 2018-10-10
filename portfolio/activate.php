<?php include "php/config.php" ?>
<?php 

$idUsuario = $_GET['id'];

$conActivar = "UPDATE clientes SET activo= 1 WHERE referral = '" . $idUsuario . "'";
$resActivar = mysqli_query($conexion,$conActivar);

?>

<script>
    alert("account activated");
    window.location = "login.php";
</script>