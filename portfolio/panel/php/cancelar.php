<?php require 'security/config.php' ?>

<?php 
    $peticion = "UPDATE compras SET estadooperacion = '2' WHERE id = '" . $_GET['id'] . "'";
    $validar = mysqli_query($conexion,$peticion);

    $revisarUsuario = "SELECT * FROM clientes LEFT JOIN compras ON compras.idcliente = clientes.id WHERE compras.id = '" . $_GET['id'] . "'";
    $resultadoUsuario = mysqli_query($conexion, $revisarUsuario);
    while($fila = mysqli_fetch_array($resultadoUsuario)){
        $cliente = $fila['idcliente'];
    }
    
    $conAcumular = "DELETE FROM tokensacumulados WHERE idcompras = '" . $_GET['id'] . "'";
    $resAcumular = mysqli_query($conexion, $conAcumular);

    mysqli_close($conexion);

?>
<script>
    window.location = "../index.php";
</script>
