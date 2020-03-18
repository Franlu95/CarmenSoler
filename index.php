<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Carmen Soler</title>
<link href="style.css" rel="stylesheet" type="text/css">
<!-- Slider -->
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="slick/slick.css">
</head>

<body>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="slick.min.js"></script>
    <script src="slick.js"></script>
	<header>
		<div class="container">
			<div class="logo">
				<div class="bold">La Asunción</div>
				<div class="bold">Clandestina de</div>
				<div class="bolder">Carmen Soler.</div>
			</div>
			<nav class="menu">
				<ul>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Sitios Históricos</a></li>
					<li><a href="#">Vida</a></li>
					<li><a href="#">Sobre su obra</a></li>
					<li><a href="#">Galería</a></li>
					<li><a href="#">Poemas</a></li>
					<li><a href="#">Los investigadores</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="video">
		<video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="50"/>
   			<source src="Memory of a Woman.mp4" type="video/mp4" />
 		<video/>
		<p>Hola</p>
	</div>
        <!-- SLIDER -->
	<div class="sitios">
		<h1>Sitios Históricos</h1>
        <section class="regular slider">
            <div><a href="www.google.com"><img src="imgs/1.jpg" alt=""></a></div>
            <div><a href=""><img src="imgs/2.jpg" alt=""></a></div>
            <div><a href=""><img src="imgs/3.jpg" alt=""></a></div>
            <div><a href=""><img src="imgs/4.jpg" alt=""></a></div>
            <div><a href=""><img src="imgs/5.jpg" alt=""></a></div>
        </section>
        <script>
			$(".regular").slick({
        		dots: true,
        		infinite: true,
        		slidesToShow: 3,
        		slidesToScroll: 1
      		});
        </script>
    </div>
        <!-- FIN SLIDER -->
        
	<div class="quienfue">
		<div class="leftcontainer">
			<h1>¿Quién fue?</h1>
			<h2>Aenean sodales turpis.</h2>
			<div class="pcontainer">
				<p>Consectetur adipiscing elit. Fusce congue condi-
				mentum tristique. Donec id nunc eu diam
				bibendum molestie at a erat. Nulla viverra nulla
				elit, eu laoreet nibh dignissim quis. Maecenas</p>
			</div>
			<a href="#">Leer Más.</a>
		</div>
		<div class="rightcontainer">
			<img src="imgs/smile.jpg">
		</div>
	</div>
	<div class="legado">
		<p>Legado</p>
	</div>
	<div class="investigadores">
		<p>Investigadores</p>
	</div>
	<footer class="footer">
		<div class="container2">
			<div class="firma"><a>Powered by COSO Studio</a></div>
			<div class="redes">FB</div>
		</div>
	</footer>
</body>
</html>