<! DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
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
  <!--Galeria-->
  <script src="../JS/jquery.flexslider.js"></script>
  <link rel="stylesheet" href="../CSS/flexslider/css/flexslider.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider-min.js"></script>
  <script>
	$(document).ready(function() {
		$('.flexslider').flexslider({
	animation: "slide"
});
});
</script>
</head>
<body>
  <div id="contenedor_carga">
    <div id="carga">
    </div>
  </div>
  <?php
  include("menuhabi.php")//incluir menu 2
  ?>
  <center>
  	<br>
  <div class="milagro">
  <div class="flexslider">
    <ul class="slides">
      <li>
        <p class="tit">Habitación Triple</p>
        <img src="../CSS/IMG/Habitaciones/1.jpeg" />
      </li>
      <li>
        <img src="../CSS/IMG/Habitaciones/3.jpeg" />
      </li>
      <li>
        <img src="../CSS/IMG/Habitaciones/8.jpeg" />
      </li>
    </ul>
  </div>
  </div>
  </center>
  		<?PHP
  			include("../pie.php")//incluir el pie de pagina
  		?>
  		<script src="../JS/menu.js"></script>
</body>
</html>
