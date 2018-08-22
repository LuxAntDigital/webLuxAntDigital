<?php

  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  $para = "guillermogranadosgomez@gmail.com";
  $asunto = "Nuevo mensaje de $nombre";

  $mensaje = "
    Nombre del remitente: ".$nombre."
    correo: ".$email."
    mensaje: ".$mensaje."
  ";

  mail($para,$asunto,utf8_decode($mensaje));

  header ("location: index.html");


 ?>
