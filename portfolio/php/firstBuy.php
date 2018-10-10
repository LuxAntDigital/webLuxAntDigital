<?php
session_start();

$nombre = $_POST['fullname'];
$apellidos = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$wallet = $_POST['wallet'];
$tokens = $_POST['tokens'];
$divisa = $_POST['divisa'];

// revisar este array: $blacklist = blacklist["DROP", "ALTER", "0 OR 1", "INSERT", "SELECT", "TRUNCATE","UPDATE"];

$_SESSION['fullname'] = $nombre;
$_SESSION['lastname'] = $apellidos;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION['wallet'] = $wallet;
$_SESSION['tokens'] = $tokens;
$_SESSION['divisa'] = $divisa;
?>
<script>
    window.location="../firstFinishBuy.php";
</script>