<!DOCTYPE HTML>
<!--
	Prologue 1.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Impresos Gala</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header" class="skel-panels-fixed">

				<div class="top">
								
					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/logo.jpg" alt="" /></span>
							<h1 id="title">Impresos Gala</h1>
							<span class="byline">El desafio: Un impreso perfecto</span>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>								
								<li><a href="#app" id="app-link" class="skel-panels-ignoreHref"><span class="icon icon-globe">Aplicación</span></a></li>
								<li><a href="#Ingresos" id="Ingresos-link" class="skel-panels-ignoreHref"><span class="icon icon-th-list">Ingresos</span></a></li>
								<li><a href="#Vistas" id="Vistas-link" class="skel-panels-ignoreHref"><span class="icon icon-table">Vistas</span></a></li>			
								<li><a href="#Reportes" id="Reportes-link" class="skel-panels-ignoreHref"><span class="icon icon-check">Reportes</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-panels-ignoreHref"><span class="icon icon-plus">Algo más</span></a></li>								
							</ul>
						</nav>
					<!-- Login -->
								<?php
								/*include ('funciones.php');
								//uso de la funcion verificar_usuario()
								if (verificar_usuario()){
									//si el usuario es verificado puede acceder al contenido permitido a el
									print "<div class='12u'><a href='index.php'><span class='icon icon-home'> Inicio </span></a></br>	";
									print "<a href='salir.php'><span class='icon icon-signout'> Salir </span></a></br>";
									print "<br><h5>Bienvenido $_SESSION[usuario]</h5></div>";
								} else {
									//si el usuario no es verificado volvera al formulario de ingreso
									header('Location:index.php');
								}*/
								?>
						
				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
							<li><a href="#" class="icon icon-facebook"><span>Facebook</span></a></li>
							<li><a href="#" class="icon icon-github"><span>Github</span></a></li>
							<li><a href="#" class="icon icon-dribbble"><span>Dribbble</span></a></li>
							<li><a href="#" class="icon icon-envelope"><span>Email</span></a></li>
						</ul>

				</div>
			
			</div>

		<!-- Main -->
			<div id="main">		
					
				<!-- App -->
					<section id="app" class="one">
						<div class="container">					

							<header>								
								<?php
								$Regresar = "index.php#App";
								include ('funciones.php');
								//uso de la funcion verificar_usuario()
								if (verificar_usuario()){
									//si el usuario es verificado puede acceder al contenido permitido a el
									print "<div class='12u'><a href=$Regresar class='button scrolly'><span class='icon icon-home'> Regresar </span></a>	";
									print "<a href='salir.php' class='button scrolly'><span class='icon icon-signout'> Cerrar Sesión </span></a></div></br>";
									print "<br><h3>Bienvenido $_SESSION[usuario]</h3>";
								} else {
									//si el usuario no es verificado volvera al formulario de ingreso
									header('Location:index.php');
								}
								?>
								<h2 class="alt"><span class="icon icon-globe"> Aplicación <strong>Impresos Gala</strong></span></h2>
							</header>
							
							<p>Selecciona cualquier opción:</p>
								<div class="12u">
									<article class="item">	
										<a href="#Ingresos" class="button scrolly">Nuevos Ingresos</a><br></br>
										<a href="#Vistas" class="button scrolly">Ir a Vistas</a><br></br>
										<a href="#Reportes" class="button scrolly">Ver Reportes</a><br></br>
										<a href="#portfolio" class="button scrolly">Algo más</a><br></br>
									</article>
								</div>
						</div>
					</section>		
								
				<!-- Ingresos -->
					<section id="Ingresos" class="two">
						<div class="container">						

							<header>
								<h2 class="alt">Ingresos</span></h2>
							</header>
							
							<p>Selecciona cualquier opción:</p>

							<footer>
							<div class="row">						
								<div class="4u">
									<article class="item">	
										<a href="ingresos.php#Usuarios" class="button scrolly">Usuarios</a><br></br>									
										<a href="ingresos.php#Clientes" class="button scrolly">Clientes</a><br></br>
										<a href="ingresos.php#Empleados" class="button scrolly">Empleados</a><br></br>
									</article>
								</div>
								<div class="4u">
									<article class="item">		
										<a href="ingresos.php#Proveedores" class="button scrolly">Proveedores</a><br></br>
										<a href="ingresos.php#Productos" class="button scrolly">Productos</a><br></br>
										<a href="#portfolio" class="button scrolly">Equipo</a><br></br>
									</article>
								</div>
								<div class="4u">
									<article class="item">	
										<a href="#portfolio" class="button scrolly">Mtra Prima</a><br></br>
										<a href="#portfolio" class="button scrolly">Colores</a><br></br>
										<a href="#portfolio" class="button scrolly">Papeles</a><br></br>
									</article>
								</div>
								
							</div>
							</footer>

						</div><br></br>
					</section>

				<!-- Vistas -->
					<section id="Vistas" class="three">
						<div class="container">

							<header>
								<h2>Vistas</h2>
							</header>							
							
							<p>Selecciona cualquier opción:</p>

							<footer>
							<div class="row">						
								<div class="4u">
									<article class="item">	
										<a href="vistas.php#Usuarios" class="button scrolly">Usuarios</a><br></br>									
										<a href="vistas.php#Clientes" class="button scrolly">Clientes</a><br></br>
										<a href="vistas.php#Empleados" class="button scrolly">Empleados</a><br></br>
									</article>
								</div>
								<div class="4u">
									<article class="item">		
										<a href="vistas.php#Proveedores" class="button scrolly">Proveedores</a><br></br>
										<a href="vistas.php#Productos" class="button scrolly">Productos</a><br></br>
										<a href="#portfolio" class="button scrolly">Equipo</a><br></br>
									</article>
								</div>
								<div class="4u">
									<article class="item">	
										<a href="#portfolio" class="button scrolly">Mtra Prima</a><br></br>
										<a href="#portfolio" class="button scrolly">Colores</a><br></br>
										<a href="#portfolio" class="button scrolly">Papeles</a><br></br>
									</article>
								</div>
								
							</div>
							</footer>

						</div>
					</section>
					
				<!-- Reportes -->
					<section id="Reportes" class="four">
						<div class="container">

							<header>
								<h2>Reportes</h2>
							</header>							
							
							<p><strong>Impresos Gala</strong></p>

						</div>
					</section>
			
				<!-- Contact -->
					<section id="contact" class="five">
						<div class="container">

							<header>
								<h2>Contacto</h2>
							</header>

							<p>Para cualquier duda o sugerencia, háganos llegar un mensaje.</p>
							
							<form method="post" action="#">
								<div class="row half">
									<div class="6u"><input type="text" class="text" name="name" placeholder="Nombre" /></div>
									<div class="6u"><input type="text" class="text" name="email" placeholder="Email" /></div>
								</div>
								<div class="row half">
									<div class="12u">
										<textarea name="message" placeholder="Mensaje"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<a href="#" class="button submit">Enviar Mensaje</a>
									</div>
								</div>
							</form>

						</div>
					</section>				
			</div>

		<!-- Footer -->
			<div id="footer">
				
				<!-- Copyright -->
					<div class="copyright">
						<p>&copy; 2013 Impresos Gala. Todos los derechos reservados.</p>
						<ul class="menu">
							<li>Diseño: <a href="http://html5up.net">HTML5 UP</a></li>
							<li><a href="#">Grupo 2</a></li>
						</ul>
					</div>
				
			</div>

	</body>
</html>