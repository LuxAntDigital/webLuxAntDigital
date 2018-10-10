<?php require 'config.php' ?>
<?php require_once('encryption') ?>
<?php $clave = false; ?>
<label for="password">Generar Password</label>
<form method="GET">
<input type="text" name="password" placeholder="introduce aquí la contraseña a cifrar">
<input type="submit" value="generar">
</form>
<p><?php $clave = encriptar($_GET['password']); echo $clave; ?></p>