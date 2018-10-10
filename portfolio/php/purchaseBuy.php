<?php include "config.php" ?>

<?php
session_start();

$newAmount = "INSERT INTO compras VALUES (NULL," . $_SESSION['usuario'] . ", '" . date('U') . "', " . $_SESSION['tokens'] .  ", " . $_SESSION['total'] .  ", " . $_SESSION['moneda'] .  ", '0')";
$finishInsert = mysqli_query($conexion,$newAmount);

include "emails/avisoCompras.php";

mysqli_close($conexion);
?>
<script>
    alert("Su petición ha sido procesada");
    window.location = "../buy.php";
</script>
