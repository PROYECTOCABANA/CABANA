<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"><meta/>
	<title>Contáctenos</title>
	<!--imporatnte todas las paginas deben tenerlo-->
	<link rel="stylesheet" href="../CSS/otromenu.css">
	<link rel="stylesheet" type="text/css" href="../CSS/carga.css">
<script src="../JS/carga.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<!--biblioteca Jquery-->
	<script src="../JS/jquery-3.2.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../CSS/fonts/logos.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale = 1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<!-- icono pestaña-->
	<link rel="shortcut icon" href="../CSS/IMG/colibri.png">
	<link rel="stylesheet" type="text/css" href="../CSS/contacto/style.css">
	<!-- CSS de contacto -->
	<link rel="stylesheet" type="text/css" href="../CSS/contacto.css">
	<!-- links nuevos -->
	<!--Import Google Icon Font-->
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->

  <!--Let browser know website is optimized for mobile-->
</head>
<body>
	<div id="contenedor_carga">
		<div id="carga">
		</div>
	</div>
	<?PHP
		include("menucontacto.php")//incluir el menu
	?>
	<br>
	<br>
<!--localización exacta del hotel, mediante google maps -->
<div id="map" align="center">
	<iframe src="https://wego.here.com/directions/mix//Casa-campestre-la-cosecha,-km-2.4-v%C3%ADa-Armenia-pueblo-tapao,-036-Armenia:e-eyJuYW1lIjoiQ2FzYSBjYW1wZXN0cmUgbGEgY29zZWNoYSIsImFkZHJlc3MiOiJrbSAyLjQgdlx1MDBlZGEgQXJtZW5pYSAtIHB1ZWJsbyB0YXBhbywgQXJtZW5pYSIsImxhdGl0dWRlIjo0LjUxNDU3OTksImxvbmdpdHVkZSI6LTc1Ljc4NDcsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6OTEyMjU3NDM4ODc3MTAxfQ==?map=4.51458,-75.7847,15,normal&fb_locale=es_ES" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<br>

<!--informacion -->

<div class="cuadro">
	<br>
	<h2><span class="titulo">Información de Contácto</span></h2>
	<br>
	<br>
	<table align="center" cellpadding="10">
		<tr>
			<td><span class="icon-user"></span> Rubiela Romero Barrero<br></td>
			<td><span class="icon-user"></span> Julio C. Santos Duarte <br> </td>
		</tr>

		<tr>
			<td><span class="icon-mobile2"></span> Tel: 315 699 9060<br> </td>
			<td><span class="icon-mobile2"></span> Tel: 310 353 6520<br> </td>
		</tr>

		<tr>
			<td><span class="icon-mail4"></span> E: <a href="mailto:casacampestrelacosecha@gmail.com"> casacampestrelacosecha@gmail.com </a>
				<br>
			<span class="icon-mail4"></span> E: <a href="mailto:ruby6817348@hotmail.com"> ruby6817348@hotmail.com</a>
			</td>

			<td> <span class="icon-mail4"></span> E: <a href="mailto:santosduartejulio@hotmail.com"> santosduartejulio@hotmail.com</a>
			</td>

		</tr>

	</table>
	<br>
	<br>
	<h2><span class="titulo">Envianos un Mensaje</span></h2>
	<br>
	<br>
		<form method="POST" action="enviar.php">
			<input name="nombre" type="text" placeholder="Nombre" required="">
			<input name="telefono" type="number" placeholder="Teléfono" required="">
			<input name="correo" type="e-mail" placeholder="Correo Electrónico" required="">
			<textarea name="mensaje" placeholder="Escribe tu mensaje" required=""></textarea>
			<input type="submit" value="ENVIAR" class="enviar">
		</form>
</div>
<br>
<?PHP
	include("../pie.php")//incluir el pie de pagina
?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../JS/menu.js"></script>
</body>
</html>
