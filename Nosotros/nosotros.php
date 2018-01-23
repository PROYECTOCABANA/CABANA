<! DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Nosotros</title>
    <!--imporatnte todas las paginas deben tenerlo-->
    <link rel="stylesheet" href="../CSS/otromenu.css">
    <link rel="stylesheet" href="../CSS/habitaciones.css">
  	<link rel="stylesheet" type="text/css" href="../CSS/carga.css">
    <script src="../JS/carga.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="../CSS/fonts/logos.css">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale = 1.0, minimum-scale=1.0">
  	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link rel="shortcut icon" href="../CSS/IMG/colibri.png">
    <script src="../JS/jquery-3.2.1.min.js"></script>
  </head>
  <body>
    <div id="contenedor_carga">
      <div id="carga">
      </div>
    </div>
    <?php
    include("menunoso.php")//incluir menu 2
    ?>
    <div class="contenido">
      <div class="imagenn"></div>
        <div class="mision"></div>
        <div class="vision"></div>
    </div>
    <?PHP
      include("../pie.php")//incluir el pie de pagina
    ?>
    <script src="../JS/menu.js"></script>
  </body>
</html>
