<?php require 'config.php' ?>
<?php require_once('security/encryption'); ?>

<?php
    $token = isset($_GET['email']) ? $_GET['email'] : '';
    $email = $token;
    $token = encriptar($token);

    include 'emails/sendRecovery.php';

?>

<script>
    alert("We have send an email with instrucction about change your password");
    window.location= "../login.php";
</script>