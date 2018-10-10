<?php
session_start();

$nombre = $_POST['fullname'];
$apellidos = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$wallet = $_POST['wallet'];

// revisar este array: $blacklist = blacklist["DROP", "ALTER", "0 OR 1", "INSERT", "SELECT", "TRUNCATE","UPDATE"];

$_SESSION['fullname'] = $nombre;
$_SESSION['lastname'] = $apellidos;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION['wallet'] = $wallet;

?>
<script>
    window.location="registerSuccess.php";
</script>