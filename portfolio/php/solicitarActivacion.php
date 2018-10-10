<?php require 'config.php' ?>
<?php
    $email = $_GET['email'];
    $iniciaSolicitud = "SELECT * FROM clientes WHERE email = '" . $email . "'";
    $resSolicitud = mysqli_query($conexion,$iniciaSolicitud);
    while($referral = mysqli_fetch_array($resSolicitud)){
        $codigo = $referral['referral'];
    }
    require 'emails/reactivacion.php';

    mysqli_close($conexion);
?>
<script>
    window.location = "../login.php";
</script>