<! DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="CSS/estilo.css">
	<link rel="stylesheet" href="CSS/fondoindex.css">
	<title>INICIO</title>
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale = 1.0, minimum-scale=1.0">
	<script src="JS/fondo.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<!--Galeria-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Scattered Polaroids Gallery: A flat-style take on a Polaroid gallery" />
	<meta name="keywords" content="scattered polaroids, image gallery, javascript, random rotation, 3d, backface, flat design" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="CSS/normalize.css">
	<link rel="stylesheet" type="text/css" href="CSS/fonts/logos.css">
	<link rel="stylesheet" type="text/css" href="CSS/demo.css">
	<link rel="stylesheet" type="text/css" href="CSS/component.css">
	<script src="JS/modernizr.min.js"></script>
</head>
<body>
	<?PHP
		include("menu1.php")//incluir el menu
	?>
<!--Galeriaa-->
<section id='madera'>
<center>
<div class="container">
			<section id="photostack-1" class="photostack photostack-start">
				<div>
					<figure>
						<a href="y" class="photostack-img"><img src="CSS/IMG/campestre/1.jpg" width="330px" height="300px" alt="img01"/></a>
					</figure>
					<figure>
						<a href="#" class="photostack-img"><img src="CSS/IMG/campestre/2.jpg" width="330px" height="300px" alt="img02"/></a>
					</figure>
					<figure>
						<a href="#" class="photostack-img"><img src="CSS/IMG/campestre/3.jpg" width="330px" height="300px" alt="img03"/></a>
					</figure>
					<figure>
						<a href="#" class="photostack-img"><img src="CSS/IMG/campestre/4.jpg" width="330px" height="300px" alt="img04"/></a>
					</figure>
					<figure>
						<a href="#" class="photostack-img"><img src="CSS/IMG/campestre/5.jpg" width="330px" height="300px" alt="img05"/></a>
					</figure>
					<figure>
						<a href="#" class="photostack-img"><img src="CSS/IMG/campestre/6.jpg" width="330px" height="300px" alt="img06"/></a>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="CSS/IMG/campestre/7.jpg" width="330px" height="300px" alt="img07"/></a>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="CSS/IMG/campestre/8.jpg" width="330px" height="300px" alt="img08"/></a>
					</figure>
				</div>
			</section>
		</center>
     <br>
		  <br>
		</div><!-- /container -->
		<br>
	</section>
	<div id="madera1">
	</div>
		<script src="js/classie.js"></script>
		<script src="js/photostack.js"></script>
		<script>
			// [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );

			new Photostack( document.getElementById( 'photostack-1' ), {
				callback : function( item ) {
					//console.log(item)
				}
			} );
			new Photostack( document.getElementById( 'photostack-2' ), {
				callback : function( item ) {
					//console.log(item)
				}
			} );
			new Photostack( document.getElementById( 'photostack-3' ), {
				callback : function( item ) {
					//console.log(item)
				}
			} );
		</script>
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
				</div>
			</div>
		</footer>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="JS/menu.js"></script>
</body>
</html>
