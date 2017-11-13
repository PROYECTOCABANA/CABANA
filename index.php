<! DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="CSS/estilo.css">
	<title>INICIO</title>
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="JS/fondo.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<!--Galeria-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Scattered Polaroids Gallery</title>
	<meta name="description" content="Scattered Polaroids Gallery: A flat-style take on a Polaroid gallery" />
	<meta name="keywords" content="scattered polaroids, image gallery, javascript, random rotation, 3d, backface, flat design" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="CSS/normalize.css" />
	<link rel="stylesheet" type="text/css" href="CSS/demo.css" />
	<link rel="stylesheet" type="text/css" href="CSS/component.css" />
	<script src="JS/modernizr.min.js"></script>
</head>
<body>
	<?PHP
		include("menu1.php")//incluir el menu
	?>
<!--Galeriaa-->
<section id='madera'>
	<br>
<center>
<div class="container">
			<section id="photostack-1" class="photostack photostack-start">
				<div>
					<figure>
						<a href="#" class="photostack-img"><img src="img/1.jpg" alt="img01"/></a>
						<figcaption>
							<h2 class="photostack-title">Serenity Beach</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="#" class="photostack-img"><img src="img/2.jpg" alt="img02"/></a>
						<figcaption>
							<h2 class="photostack-title">Happy Days</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="#" class="photostack-img"><img src="img/3.jpg" alt="img03"/></a>
						<figcaption>
							<h2 class="photostack-title">Beautywood</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="#" class="photostack-img"><img src="img/4.jpg" alt="img04"/></a>
						<figcaption>
							<h2 class="photostack-title">Heaven of time</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="#" class="photostack-img"><img src="img/5.jpg" alt="img05"/></a>
						<figcaption>
							<h2 class="photostack-title">Speed Racer</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="#" class="photostack-img"><img src="img/6.jpg" alt="img06"/></a>
						<figcaption>
							<h2 class="photostack-title">Forever this</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="img/7.jpg" alt="img07"/></a>
						<figcaption>
							<h2 class="photostack-title">Lovely Green</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="img/8.jpg" alt="img08"/></a>
						<figcaption>
							<h2 class="photostack-title">Wonderful</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="img/9.jpg" alt="img09"/></a>
						<figcaption>
							<h2 class="photostack-title">Love Addict</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="img/10.jpg" alt="img10"/></a>
						<figcaption>
							<h2 class="photostack-title">Friendship</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="img/11.jpg" alt="img11"/></a>
						<figcaption>
							<h2 class="photostack-title">White Nights</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="img/12.jpg" alt="img12"/></a>
						<figcaption>
							<h2 class="photostack-title">Serendipity</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="img/13.jpg" alt="img13"/></a>
						<figcaption>
							<h2 class="photostack-title">Pure Soul</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="img/14.jpg" alt="img14"/></a>
						<figcaption>
							<h2 class="photostack-title">Winds of Peace</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="img/15.jpg" alt="img15"/></a>
						<figcaption>
							<h2 class="photostack-title">Shades of blue</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="img/16.jpg" alt="img16"/></a>
						<figcaption>
							<h2 class="photostack-title">Lightness</h2>
						</figcaption>
					</figure>
				</div>
			</section>
		<center>
		</div><!-- /container -->
	</section>
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
</body>
</html>
