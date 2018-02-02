<! DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Nosotros</title>
    <!--imporatnte todas las paginas deben tenerlo-->
    <link rel="stylesheet" href="../CSS/otromenu.css">
    <link rel="stylesheet" href="../CSS/nosotros.css">
  	<link rel="stylesheet" type="text/css" href="../CSS/carga.css">
    <script src="../JS/carga.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="../CSS/fonts/logos.css">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale = 1.0, minimum-scale=1.0">
  	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link rel="shortcut icon" href="../CSS/IMG/colibri.png">
    <script src="../JS/jquery-3.2.1.min.js"></script>
    <script src="..\JS\parallax.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/nosotros/style.css">
  </head>
  <body>
    <div id="contenedor_carga">
      <div id="carga">
      </div>
    </div>
    <?php
    include("menunoso.php")//incluir menu 2
    ?>
    <script>
    $(document).ready(function(){
    $('.parallax').parallax();
    });
    </script>
    <div id="box1">
    </div>
    <div id="des">
      <p class="titulo1">Descripción</p>
        <p class="parrafo">La casa campestre la cosecha cuenta con 6 confortables habitaciones, piscina
          panorámica, zona húmeda con jacuzzi climatizado, sala de lectura, juego de billar,
          juegos de mesa, internet inalámbrico, zona de juegos para niños como columpios, cancha
          de futbol, cancha de voleibol, restaurante, zona de televisión, parqueadero privado y
          seguridad 24 horas.</p>
          <br>
          <p class="icono"><span class="icon-circle-down"></span></p>
    </div>
    <div id="box3">

    </div>
    <div id="mision">
      <p class="titulo1">Misión</p>
        <p class="parrafo">Somos una propuesta de hotel sostenible fundamentada en el respeto por el
          ambiente y el uso eficiente de los recursos naturales, a la vez que ofrecemos a nuestros huéspedes
           y visitantes un ambiente apacible, rodeado de exuberante vegetación, espacios confortables y
           alimentación saludable.</p>
    </div>
    <div id="box4">

    </div>
    <div id="vision">
      <p class="titulo1">Visión</p>
        <p class="parrafo">En el 2020 ser reconocidos como un hotel referente en el Quindío, por ser modelo
          en turismo responsable y gestión hotelera sostenible y saludable, gracias a la calidad altamente
          diferenciada de nuestro servicio, al compromiso con el medio ambiente, la cultura local y la cultura local
          y la Responsabilidad Social Territorial como un valor que da respuesta a las exigencias cada vez mayores
          de la sociedad actual.</p>
    </div>
    <div id="box5">
    </div>
    <?PHP
      include("../pie.php")//incluir el pie de pagina
    ?>
    <script src="../JS/menu.js"></script>
  </body>
</html>
