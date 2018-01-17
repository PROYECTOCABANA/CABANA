<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"><meta/>
	<title>Contáctenos</title>
	<!--imporatnte-->
	<link rel="stylesheet" href="../CSS/otromenu.css">
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../CSS/fonts/logos.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale = 1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<!-- icono pestaña-->
	<link rel="shortcut icon" href="contact.png">
	<link rel="stylesheet" type="text/css" href="../CSS/contacto/style.css">
	<!-- CSS de contacto -->
	<link rel="stylesheet" type="text/css" href="../CSS/contacto.css">

</head>
<body>
	<?PHP
		include("menucontacto.php")//incluir el menu
	?>
	<br>
	<br>
<!--localización exacta del hotel, mediante google maps -->
<div id="map" align="center">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.4746474651356!2d-75.77344968532978!3d4.508118296724374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e385f2f8c8d84fd%3A0xbfb1b2b903a59ab7!2sArmenia+-+Pueblo+Tapado%2C+Quind%C3%ADo!5e0!3m2!1ses-419!2sco!4v1502393861974" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<br>

<!--informacion -->

<div class="section" >
	<br>
	<h2><span class="titulo">Información de Contácto</span></h2>
	<br>
	<br>
	<table align="center" cellpadding="10">
		<tr>
			<td><span class="icon-user"></span> Rubiela Romero Barrero<br></td>
			<td><span class="icon-user"></span> Julio C. Santos Duarte <br>  </td>
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
			<input type="submit" value="ENVIAR" class="submit">
		</form>
</div>
<br>
<footer>
	<div class="footer">
		<br>
		<div class="logi1">
			<a href="https://www.facebook.com/casacampestrelacosecha/"><span class="icon-facebook2"></span></a>
		</div>
		<div class="logi2">
			<a href="https://www.instagram.com/la_cosechaaa/"><span class="icon-instagram"></span></a>
		</div>
		<br>
		<br>
		<div class="logi3">
			<p>315 6999060 | casacampestrelacosecha@gmail.com | km 2.4 vía Armenia - pueblo Armenia</p>
			<br>
		</div>
	</div>
</footer>
<!--menu responsive-->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../JS/menu.js"></script>
</body>
</html>
