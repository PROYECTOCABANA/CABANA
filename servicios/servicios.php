<! DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"><meta/>
	<title>Contáctenos</title>
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
  <!--estilo collage grid-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../CSS/servicios.css">
</head>
<body>

	<div id="contenedor_carga">
		<div id="carga">
		</div>
	</div>

	<?PHP
		include("menuservicios.php")//incluir el menu
	?>
<br>
<!-- MAIN (Center website) -->
<div class="main">
<br>
<h1>SERVICIOS</h1>
<br>
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Todo</button>
  <button class="btn" onclick="filterSelection('comedor')"> Comedor</button>
  <button class="btn" onclick="filterSelection('piscina')"> Piscina</button>
  <button class="btn" onclick="filterSelection('areas')"> Areas Comunes</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="fila">
<!--comedor -->
  <div class="column comedor">
    <div class="content">
      <img src="../CSS/IMG/servicios/comedor1.jpg"  style="width:100%">
      <h4>Cabaña</h4>
    </div>
  </div>
  <div class="column comedor">
    <div class="content">
    <img src="../CSS/IMG/servicios/comedor2.jpg"  style="width:100%">
      <h4>Cocina-Comedor</h4>
    </div>
  </div>
  <div class="column comedor">
    <div class="content">
    <img src="../CSS/IMG/servicios/comedor3.jpg"  style="width:100%">
      <h4>Comedores</h4>
    </div>
  </div>
  <!--end comedor -->
  <!--piscina -->
  <div class="column piscina">
    <div class="content">
      <img src="../CSS/IMG/servicios/piscina4.jpg" style="width:100%">
      <h4>Piscina</h4>
    </div>
  </div>
  <div class="column piscina">
    <div class="content">
    <img src="../CSS/IMG/servicios/jacuzi5.jpeg" style="width:88%">
      <h4>Jacuzzi</h4>
    </div>
  </div>
  <div class="column piscina">
    <div class="content">
    <img src="../CSS/IMG/servicios/piscina6.jpg" style="width:100%">
      <h4>Piscina</h4>
    </div>
  </div>
  <!-- end piscina -->
  <!--areas comunes-->
  <div class="column areas">
    <div class="content">
      <img src="../CSS/IMG/servicios/car.jpeg" style="width:100%">
      <h4>Un momento de diversi&oacute;n con el Jeep tradicional</h4>
    </div>
  </div>
  <div class="column areas">
    <div class="content">
    <img src="../CSS/IMG/servicios/columpio.jpeg" style="width:100%">
      <h4>Juegos Infantiless</h4>
    </div>
  </div>
  <div class="column areas">
    <div class="content">
    <img src="../CSS/IMG/servicios/soccer.jpeg" style="width:100%">
      <h4>Cancha de mini-f&uacute;tbol</h4>
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

  <?PHP
    include("../pie.php")//incluir el pie de pagina
  ?>
<script src="../JS/menu.js"></script>
<script>
  filterSelection("all")
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }

  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }

  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);
      }
    }
    element.className = arr1.join(" ");
  }


  // Add active class to the current button (highlight it)
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
</script>
</body>
</html>
