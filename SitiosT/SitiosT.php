<!DOCTYPE html>
<html>
<head>
	<title>Sitios Turisticos</title>
	<meta charset="utf-8"><meta/> <!-- Acepta las tildes-->
	<!--imporatnte todas las paginas deben tenerlo-->
	<link rel="stylesheet" href="../../CSS/otromenuSITIOS.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/carga.css">
  <script src="../../JS/carga.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../CSS/fonts/logos.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale = 1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<!-- icono en la pestaña-->
	<link rel="shortcut icon" href="../../CSS/IMG/colibri.png">
	<link rel="stylesheet" href="../../CSS/collage.css">
	<link rel="stylesheet" href="../../CSS/SitiosT.css">
	<!--biblioteca Jquery-->
	<script src="../../JS/jquery-3.2.1.min.js"></script>
	<script src="../../JS/smooth-scroll.min.js"></script>
	<!-- links nuevos -->
	<!--Import Google Icon Font-->
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../CSS/materializecss/css/materialize.min.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script type="text/javascript" src="../../CSS/materializecss/js/materialize.min.js"></script>
		<!--para que la pagina se pueda desplazar-->
		<script>
		smoothScroll.init({
			selector:'[data-scroll]',
			selectorHeader:null,
			speed:500,
			easing:'easeInOutCubic',
			offset:0,
			callback:function (anchor,toggle){}
		});
		</script>
</head>
<body>
	<div id="contenedor_carga">
		<div id="carga">
		</div>
	</div>
<?php
	include("menuSitiosT.php")//incluir menu 2
 ?>
 <!--******* QUINDIO *******-->
<div>
	<div id="quindio">
	<section id="banner1">
   		<div class="bg-color"><br><br>
            <h1 class="logo-name1">Quindío</h1>
    	</div>
	</section>
	</div>
</div>
<!-- carrousel para quindio -->
<script>
	$(document).ready(function() {
			$('.carousel').carousel();
	});
	$(document).ready(function(){
$('.collapsible').collapsible();
});
</script>
<div class="Elcarousel" style="margin-top: 26px !important;" >
	<div class="row">
		<div class="col s12 titulos" id=banner4>
			<h1>Quindío</h1>
		</div>
	</div>

	<ul class="collapsible" data-collapsible="accordion">
			<li>
				<div class="collapsible-header"><i class="material-icons">terrain</i>Parque del Café</div>
				<div class="collapsible-body">
					<div class="row">
						<img src="../../CSS/IMG/quindio/parque_del_cafe.jpg">
					</div>
					<div class="row">
						<div class="col s12" style="text-align:center;">
							<a class="waves-effect waves-light btn" href="http://www.parquedelcafe.co/">Ir al sitio</a>
						</div>
					</div>
					</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">terrain</i>Panaca</div>
			 <div class="collapsible-body">
				 <div class="row">
					 <img src="../../CSS/IMG/quindio/panaca.jpg">
				 </div>
				 <div class="row">
					 <div class="col s12" style="text-align:center;">
						 <a class="waves-effect waves-light btn" href="http://www.parquedelcafe.co">Ir al sitio</a>
					 </div>
				 </div>
				 </div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">terrain</i>Recuca</div>
				<div class="collapsible-body">
					<div class="row">
						<img src="../../CSS/IMG/quindio/recuca.jpg">
					</div>
					<div class="row">
						<div class="col s12" style="text-align:center;">
							<a class="waves-effect waves-light btn" href="http://www.parquedelcafe.co/">Ir al sitio</a>
						</div>
					</div>
					</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">terrain</i>Parque de los arrieros</div>
			 <div class="collapsible-body">
				 <div class="row">
					 <img src="../../CSS/IMG/quindio/arrieros.jpg">
				 </div>
				 <div class="row">
					 <div class="col s12" style="text-align:center;">
						 <a class="waves-effect waves-light btn" href="http://www.parquedelcafe.co/">Ir al sitio</a>
					 </div>
				 </div>
				 </div>
		 </li>
		 <li>
			 <div class="collapsible-header"><i class="material-icons">terrain</i>Mariposario</div>
			 <div class="collapsible-body">
				 <div class="row">
					 <img src="../../CSS/IMG/quindio/mariposario.jpg">
				 </div>
				 <div class="row">
					 <div class="col s12" style="text-align:center;">
						 <a class="waves-effect waves-light btn" href="http://www.parquedelcafe.co/">Ir al sitio</a>
					 </div>
				 </div>
				 </div>
		 </li>
		 <li>
			 <div class="collapsible-header"><i class="material-icons">terrain</i>Carlarcá</div>
			 <div class="collapsible-body">
				 <div class="row">
					 <img src="../../CSS/IMG/quindio/calarca.jpg">
				 </div>
				 <div class="row">
					 <div class="col s12" style="text-align:center;">
						 <a class="waves-effect waves-light btn" href="http://www.parquedelcafe.co/">Ir al sitio</a>
					 </div>
				 </div>
				 </div>
		 </li>
		 <li>
			 <div class="collapsible-header"><i class="material-icons">terrain</i>Circasia</div>
			 <div class="collapsible-body">
				 <div class="row">
					 <img src="../../CSS/IMG/quindio/circasia.jpg">
				 </div>
				 <div class="row">
					 <div class="col s12" style="text-align:center;">
						 <a class="waves-effect waves-light btn" href="http://www.parquedelcafe.co/">Ir al sitio</a>
					 </div>
				 </div>
				 </div>
		 </li>
		 <li>
			 <div class="collapsible-header"><i class="material-icons">terrain</i>Finlandia</div>
			 <div class="collapsible-body">
				 <div class="row">
					 <img src="../../CSS/IMG/quindio/Filandia.jpg">
				 </div>
				 <div class="row">
					 <div class="col s12" style="text-align:center;">
						 <a class="waves-effect waves-light btn" href="http://www.parquedelcafe.co/">Ir al sitio</a>
					 </div>
				 </div>
				 </div>
		 </li>
		 <li>
			 <div class="collapsible-header"><i class="material-icons">terrain</i>Salento</div>
			 <div class="collapsible-body">
				 <div class="row">
					 <img src="../../CSS/IMG/quindio/salento.jpg">
				 </div>
				 <div class="row">
					 <div class="col s12" style="text-align:center;">
						 <a class="waves-effect waves-light btn" href="http://www.parquedelcafe.co/">Ir al sitio</a>
					 </div>
				 </div>
				 </div>
		 </li>
		</ul>
</div>
<!-- collage quindio-->
	<div class="row ">
		<div class="col s4 contenedor">
	      <img src="../../CSS/IMG/quindio/parque_del_cafe.jpg" class="imagen" >
	      <!--incio efecto overlay-->
	      <div class="overlay col s4">
	        <div class="text">
	          <a href="http://www.parquedelcafe.co/">Parque del Café</a>
	        </div>
	      </div>
	      <!--end efecto overlay-->
		</div>
	  <!--panaca -->
		<div class="col s4 contenedor">
	    <img src="../../CSS/IMG/quindio/panaca.jpg" class="imagen">
	      <!--incio efecto overlay-->
	      <div class="overlay col s4">
	        <div class="text"><a href="http://www.parquedelcafe.co/">Panaca</a></div>
	      </div>
	      <!--end efecto overlay-->
		</div>
	  <!-- Recuca-->
		<div class="col s4 contenedor">
	    <img src="../../CSS/IMG/quindio/recuca.jpg" class="imagen">
	      <!--incio efecto overlay-->
	      <div class="overlay col s4">
	        <div class="text"><a href="http://www.parquedelcafe.co/">Recuca</a></div>
	      </div>
	      <!--end efecto overlay-->
		</div>
	</div>

	<!-- parque los arrieros-->
	<div class="row " >
	    <div class="col s4 contenedor">
	  		<img src="../../CSS/IMG/quindio/arrieros.jpg" class="imagen">
	  		<!--incio efecto overlay-->
	  		<div class="overlay col s4">
	  			<div class="text"><a href="http://www.parquedelcafe.co/">Parque Los Arrieros</a></div>
	  		</div>
	  		<!--end efecto overlay-->
	  	</div>
	  	<!--Mariposario -->
	  	<div class="col s4 contenedor">
	  		<img src="../../CSS/IMG/quindio/mariposario.jpg" class="imagen">
	  		<!--incio efecto overlay-->
	  		<div class="overlay col 24">
	  			<div class="text"><a href="http://www.parquedelcafe.co/">Mariposario</a></div>
	  		</div>
	  		<!--end efecto overlay-->
	  	</div>

	  	<!-- calarca-->
	  	<div class="col s4 contenedor">
	  		<img src="../../CSS/IMG/quindio/calarca.jpg" class="imagen">
	  		<!--incio efecto overlay-->
	  		<div class="overlay col s4">
	  			<div class="text"><a href="http://www.parquedelcafe.co/">Calarcá</a></div>
	  		</div>
	  		<!--end efecto overlay-->
	  </div>
	</div>
	<div class="row ">

	  	<!--Circasia -->
	  	<div class="col s4 contenedor">
	  		<img src="../../CSS/IMG/quindio/circasia.jpg" class="imagen">
	  		<!--incio efecto overlay-->
	  		<div class="overlay col s4">
	  			<div class="text"><a href="http://www.parquedelcafe.co/">Circasia</a></div>
	  		</div>
	  		<!--end efecto overlay-->
	  	</div>
	  	<!--Filandia -->
	  	<div class="col s4 contenedor">
	  		<img src="../../CSS/IMG/quindio/Filandia.jpg" class="imagen">
	  		<!--incio efecto overlay-->
	  		<div class="overlay col s4">
	  			<div class="text"><a href="http://www.parquedelcafe.co/">Filandia</a></div>
	  		</div>
	  		<!--end efecto overlay-->
	  	</div>

	  	<!--Salento -->
	  	<div class="col s4 contenedor">
	  		<img src="../../CSS/IMG/quindio/salento.jpg" class="imagen">
	  		<!--incio efecto overlay-->
	  		<div class="overlay col s4">
	  			<div class="text"><a href="http://www.parquedelcafe.co/">Salento</a></div>
	  		</div>
	  		<!--end efecto overlay -->
	  </div>
	 </div>

	 <!--******* RISARALDA *******-->
	 	<div id="risaralda">
	 	<section id="banner2">
	    		<div class="bg-color"><br><br>
	             <h1 class="logo-name">Risaralda</h1>
	     	</div>
	 	</section>
	 	</div>
	 </div>
	 <!-- carousel de risaralda -->
	 <div class="Elcarousel" style="margin-top: 26px !important;" >
 		<div class="row">
 			<div class="col s12 titulos" id=banner5>
 				<h1>Risaralda</h1>
 			</div>
 		</div>
 	<ul class="collapsible" data-collapsible="accordion">
 			<li>
 				<div class="collapsible-header"><i class="material-icons">terrain</i>Aguas termales</div>
 				<div class="collapsible-body">
 					<div class="row">
 						<img src="../../CSS/IMG/risaralda/termales.jpg">
 					</div>
 					<div class="row">
 						<div class="col s12" style="text-align:center;">
 							<a class="waves-effect waves-light btn" href="http://www.termales.com.co/">Ir al sitio</a>
 						</div>
 					</div>
 					</div>
 			</li>
 			<li>
 				<div class="collapsible-header"><i class="material-icons">terrain</i>Ukumari</div>
 			 <div class="collapsible-body">
 				 <div class="row">
 					 <img src="../../CSS/IMG/risaralda/ukumari.jpg">
 				 </div>
 				 <div class="row">
 					 <div class="col s12" style="text-align:center;">
 						 <a class="waves-effect waves-light btn" href="https://www.ukumaripereira.com/es">Ir al sitio</a>
 					 </div>
 				 </div>
 				 </div>
 			</li>
 			<li>
 				<div class="collapsible-header"><i class="material-icons">terrain</i>Consotá</div>
 				<div class="collapsible-body">
 					<div class="row">
 						<img src="../../CSS/IMG/risaralda/consota.jpg">
 					</div>
 					<div class="row">
 						<div class="col s12" style="text-align:center;">
 							<a class="waves-effect waves-light btn" href="http://consota.comfamiliar.com/">Ir al sitio</a>
 						</div>
 					</div>
 					</div>
 			</li>
 		</ul>
 	</div>
	 <!-- collage de risaralda -->
	 <div class="row ">
	   <!--Aguas Termales -->
	   <div class="col s4 contenedor">
	     <img src="../../CSS/IMG/risaralda/termales.jpg" class="imagen">
	       <!--incio efecto overlay-->
	       <div class="overlay overlay col s4">
	         <div class="text"><a href="http://www.termales.com.co/">Aguas Termales</a></div>
	       </div>
	       <!--end efecto overlay-->
	   </div>

	   <!-- ukumari zoologico -->
	   <div class="col s4 contenedor">
	     <img src="../../CSS/IMG/risaralda/ukumari.jpg" class="imagen">
	       <!--incio efecto overlay-->
	       <div class="overlay overlay col s4">
	         <div class="text"><a href="https://www.ukumaripereira.com/es">BioParque Ukumar&iacute;</a></div>
	       </div>
	       <!--end efecto overlay-->
	   </div>

	   <!-- consotá piscinas -->
	   <div class="col s4 contenedor">
	     <img src="../../CSS/IMG/risaralda/consota.jpg" class="imagen">
	       <!--incio efecto overlay-->
	       <div class="overlay overlay col s4">
	         <div class="text"><a href="http://consota.comfamiliar.com/">Parque Consot&aacute;</a></div>
	       </div>
	       <!--end efecto overlay-->
	   </div>

	 </div>

<!-- Caldas -->
<div>
	<div id="caldas">
	<section id="banner3">
   		<div class="bg-color"><br><br>
            <h1 class="logo-name">Caldas</h1>
    	</div>
	</section>
	</div>
</div>
<!-- carousel de caldas -->
<div class="Elcarousel" style="margin-top: 26px !important;" >
	<div class="row">
		<div class="col s12 titulos" id=banner6>
			<h1>Caldas</h1>
		</div>
	</div>
<ul class="collapsible" data-collapsible="accordion">
		<li>
			<div class="collapsible-header"><i class="material-icons">terrain</i>Parque los Nevados</div>
			<div class="collapsible-body">
				<div class="row">
					<img src="../../CSS/IMG/caldas/parque_los_nevados.jpg">
				</div>
				<div class="row">
					<div class="col s12" style="text-align:center;">
						<a class="waves-effect waves-light btn" href="http://www.parquesnacionales.gov.co/portal/es/ecoturismo/region-andina/parque-nacional-natural-los-nevados/">Ir al sitio</a>
					</div>
				</div>
				</div>
		</li>
		<li>
			<div class="collapsible-header"><i class="material-icons">terrain</i>Tierra viva</div>
		 <div class="collapsible-body">
			 <div class="row">
				 <img src="../../CSS/IMG/caldas/termales_tierra_viva.jpg">
			 </div>
			 <div class="row">
				 <div class="col s12" style="text-align:center;">
					 <a class="waves-effect waves-light btn" href="http://www.termalestierraviva.com/">Ir al sitio</a>
				 </div>
			 </div>
			 </div>
		</li>
		<li>
			<div class="collapsible-header"><i class="material-icons">terrain</i>Catedral Basílica de Nuestra Señora de Manizales</div>
			<div class="collapsible-body">
				<div class="row">
					<img src="../../CSS/IMG/caldas.jpg">
				</div>
				<div class="row">
					<div class="col s12" style="text-align:center;">
						<a class="waves-effect waves-light btn" href="">Ir al sitio</a>
					</div>
				</div>
				</div>
		</li>
	</ul>
</div>
<!-- collage de caldas -->
<!--parque natural el nevado -->
<div class="row ">
  <div class="col s4 contenedor">
    <img src="../../CSS/IMG/caldas/parque_los_nevados.jpg" class="imagen">
      <!--incio efecto overlay-->
      <div class="overlay overlay col s4">
        <div class="text"><a href="http://www.parquesnacionales.gov.co/portal/es/ecoturismo/region-andina/parque-nacional-natural-los-nevados/"> Nevado del Ruiz</a></div>
      </div>
      <!--end efecto overlay-->
  </div>

  <!-- Termales Tierra Viva -->
  <div class="col s4 contenedor">
    <img src="../../CSS/IMG/caldas/termales_tierra_viva.jpg" class="imagen">
      <!--incio efecto overlay-->
      <div class="overlay overlay col s4">
        <div class="text"><a href="http://www.termalestierraviva.com/"> Termales Tierra Viva</a></div>
      </div>
      <!--end efecto overlay-->
  </div>

  <!-- Termales Tierra Viva -->
  <div class="col s4 contenedor">
    <img src="../../CSS/IMG/caldas.jpg" class="imagen">
      <!--incio efecto overlay-->
      <div class="overlay overlay col s4">
        <div class="text"><a href=" "> Catedral Basílica de Nuestra Señora del Rosario de Manizales</a></div>
      </div>
      <!--end efecto overlay-->
  </div>
</div>
<br>
<?PHP
	include("../pie.php")//incluir el pie de pagina
?>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="../../JS/menu.js"></script>
	<script src="../../JS/bootstrap.min.js"></script>
</body>
</html>
