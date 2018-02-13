<! DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="CSS\estilo.css">
	<link rel="stylesheet" type="text/css" href="CSS/nosotros/style.css">
	<link rel="stylesheet" href="CSS/flexslider/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="CSS/carga.css">
	<title>INICIO</title>
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<script src="JS/jquery-3.2.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale = 1.0, minimum-scale=1.0">
	<script src="JS/jquery.flexslider.js"></script>
	<script src="JS/carga.js"></script>
	<link rel="shortcut icon" href="CSS/IMG/colibri.png">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<!--Galeria-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider-min.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/fonts/logos.css">
	<!--Galeriaa-->
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
	<?PHP
		include("menu1.php")//incluir el menu
	?>
<!--Galeriaa-->
<br>
<br>
<div id="banner">
</div>
<center>
<div id="galeria">
	<br>
	<p class="icono"><span class="icon-circle-down"></span></p>
	<div class="flexslider">
		<ul class="slides">
			<li>
				<img src="CSS\IMG\campestre\1.jpeg"/>
			</li>
			<li>
				<img src="CSS\IMG\campestre\2.jpeg" />
			</li>
			<li>
				<img src="CSS\IMG\campestre\3.jpeg" />
			</li>
			<li>
				<img src="CSS\IMG\campestre\4.jpeg" />
			</li>
			<li>
				<img src="CSS\IMG\campestre\5.jpeg" />
			</li>
			<li>
				<img src="CSS\IMG\campestre\6.jpeg" />
			</li>
			<li>
				<img src="CSS\IMG\campestre\7.jpeg" />
			</li>
			<li>
				<img src="CSS\IMG\campestre\8.jpeg" />
			</li>
			<li>
				<img src="CSS\IMG\campestre\9.jpeg" />
			</li>
		</ul>
	</div>
</div>
</center>
		<?PHP
			include("pie.php")//incluir el pie de pagina
		?>
		<script src="JS/menu.js"></script>
</body>
</html>
