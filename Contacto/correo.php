<?php
  $destino = "casacampestrelacosecha@gmail.com";
  $asunto = "Mensaje de la pagina de la cabaña la cosecha";

  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];


  $contenido = "Nombre: ".$nombre. "\nCorreo: " .$correo. "\nTeléfono: " .$telefono. "\nMensaje: " .$mensaje;

  mail($destino,$asunto,utf8_decode($contenido));
  header("location:gracias.php");
?>
