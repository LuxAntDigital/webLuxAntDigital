<?php include 'config.php'; ?>
<?php require_once('security/encryption'); ?>

<?php
session_start();

$consPassword = "UPDATE clientes SET contrasena = '" . encriptar($_GET['password']) . "' WHERE email = '" . $_SESSION['email'] . "'";
$resPassword = mysqli_query($conexion,$consPassword);

$conIfLock = "SELECT * FROM loginfail WHERE email = '" . $_SESSION['email'] . "'";
$resIfLock = mysqli_query($conexion,$conIfLock);
while($email = mysqli_fetch_array($resIfLock)){
    $loginFail = $email['intentos'];
}

if($loginFail > 0){
    $conBorrarEmail = "DELETE FROM loginfail WHERE email = '" . $_SESSION['email'] . "'";
    $resBorrarEmail = mysqli_query($conexion, $conBorrarEmail);
}

session_destroy();
mysqli_close($conexion);
?>

<script>
    alert("Password change successfull");
    window.location= "../login.php";
</script>