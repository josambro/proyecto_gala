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
		<!--    ESTILO GENERAL   -->                
		<!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> 
		<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="bootstrap/css/docs.css" rel="stylesheet">
		<link href="bootstrap/js/google-code-prettify/prettify.css" rel="stylesheet"> -->
        <!--    ESTILO GENERAL    -->
        <!--    JQUERY   -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="js/funciones.js"></script>
        <script src="bootstrap/js/bootstrap-alert.js"></script>
        <!--    JQUERY    -->
        <!--    FORMATO DE TABLAS    -->
        <link type="text/css" href="css/demo_table.css" rel="stylesheet" />
        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
        <!--    FORMATO DE TABLAS    -->
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
								<li><a href="#Vistas" id="Vistas-link" class="skel-panels-ignoreHref"><span class="icon icon-table">Vistas</span></a></li>			
								<li><a href="#Usuarios" id="Usuarios-link" class="skel-panels-ignoreHref"><span class="icon icon-user">Usuarios</span></a></li>
								<li><a href="#Clientes" id="Clientes-link" class="skel-panels-ignoreHref"><span class="icon icon-male">Clientes</span></a></li>								
								<li><a href="#Empleados" id="Empleados-link" class="skel-panels-ignoreHref"><span class="icon icon-group">Empleados</span></a></li>
								<li><a href="#Proveedores" id="Proveedores-link" class="skel-panels-ignoreHref"><span class="icon icon-truck">Proveedores</span></a></li>
								<li><a href="#Productos" id="Productos-link" class="skel-panels-ignoreHref"><span class="icon icon-file-text">Productos</span></a></li>
							</ul>
						</nav>					
						
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
					
				<!-- Vistas -->
					<section id="Vistas" class="one">
						<div class="container">					

							<header>
								<?php
								$Regresar = "app.php";
								include ('funciones.php');
								//uso de la funcion verificar_usuario()
								if (verificar_usuario()){
									//si el usuario es verificado puede acceder al contenido permitido a el
									print "<div class='12u'><a href=$Regresar class='button scrolly'><span class='icon icon-home'> Regresar</span></a>	";
									print "<a href='salir.php' class='button scrolly'><span class='icon icon-signout'> Cerrar Sesión</span></a></div></br>";
									print "<br><h3>Bienvenido $_SESSION[usuario]</h3>";
								} else {
									//si el usuario no es verificado volvera al formulario de ingreso
									header('Location:index.php');
								}
								?>	
								<div class="alert alert-block">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<h4>Bienvenido</h4>
								<p>Recuerda cerrar siempre tu sesion</p>
								</div>
								<h2 class="alt"> Vistas <strong>Impresos Gala</strong></h2>
							</header>
							
							<p>Selecciona cualquier opción:</p>

							<footer>
							<div class="row">						
								<div class="4u">
									<article class="item">	
										<a href="#Usuarios" class="button scrolly">Usuarios</a><br></br>									
										<a href="#Clientes" class="button scrolly">Clientes</a><br></br>
										<a href="#Empleados" class="button scrolly">Empleados</a><br></br>
									</article>
								</div>
								<div class="4u">
									<article class="item">		
										<a href="#Proveedores" class="button scrolly">Proveedores</a><br></br>
										<a href="#Productos" class="button scrolly">Productos</a><br></br>
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
								
				<!-- Usuarios-->
					<section id="Usuarios" class="two">
						<div class="container">						

							<header>
								<h2 class="alt">Usuarios</span></h2>
							</header>
							
							<p>Ingrese usuario/contraseña:</p>
							
							<form method="post" action="insertar_usuarios.php#Usuarios">
								
								<div class="row">
									<div class="6u"><input type="text" class="text" name="usuario" placeholder="Usuario" /></div>
								
									<div class="6u"><input type="password" class="text" name="password" placeholder="Contraseña" /></div>
								</div>
								
								<div class="row">
									<div class="12u">
										<a href="#" class="button submit">Ingresar</a>
									</div>
								</div>
							</form>	
							<br></br>
						</div>
					</section>

				<!-- Clientes -->
					<section id="Clientes" class="three">
						<div class="container">

							<header>
								<h2>Clientes</h2>
							</header>							
							
							<p>Ingrese los siguientes datos:</p>
							
							<form method="post" action="insertar_clientes.php#Clientes">
								
								<div class="row">
									<div class="6u"><input type="text" class="text" name="nombre" placeholder="Nombre" /></div>
								
									<div class="6u"><input type="text" class="text" name="apellido" placeholder="Apellido" /></div>
								</div>
								
								<div class="row">
									<div class="6u"><input type="text" class="text" name="domicilio" placeholder="Domicilio" /></div>
									
									<div class="6u"><input type="text" class="text" name="nit" placeholder="NIT" /></div>						
								</div>
								
								<div class="row">
									<div class="6u"><input type="text" class="text" name="tel" placeholder="Teléfono" /></div>
								
									<div class="6u"><input type="text" class="text" name="email" placeholder="E-mail" /></div>
								</div>
								
								<div class="row">
									<div class="12u">
										<a href="#" class="button submit">Ingresar</a>
									</div>
								</div>
							</form>	

						</div>
					</section>
			
				<!-- Empleados -->
					<section id="Empleados" class="four">
						<div class="container">

							<header>
								<h2>Empleados</h2>
							</header>							
							
							<p>Ingrese los siguientes datos:</p>
							
							<form method="post" action="insertar_empleados.php#Empleados">
								
								<div class="row">
									<div class="6u"><input type="text" class="text" name="nombre" placeholder="Nombre" /></div>
								
									<div class="6u"><input type="text" class="text" name="apellido" placeholder="Apellido" /></div>
								</div>
								
								<div class="row">								
									<div class="6u"><input type="text" class="text" name="domicilio" placeholder="Domicilio" /></div>
									
									<div class="6u"><input type="text" class="text" name="dpi" placeholder="DPI" /></div>
								</div>
								
								<div class="row">
									<div class="6u"><input type="text" class="text" name="puesto" placeholder="Puesto" /></div>
								
									<div class="6u"><input type="text" class="text" name="email" placeholder="E-mail" /></div>
								</div>
								
								<div class="row">
									<div class="12u">
										<a href="#" class="button submit">Ingresar</a>
									</div>
								</div>
							</form>	

						</div>
					</section>

				<!-- Proveedores -->
					<section id="Proveedores" class="five">
						<div class="container">

							<header>
								<h2>Proveedores</h2>
							</header>							
							
							<p>Ingrese los siguientes datos:</p>
							
							<form method="post" action="app.html">
								
								<div class="row">
									<div class="6u"><input type="text" class="text" name="name" placeholder="Nombre" /></div>
								
									<div class="6u"><input type="text" class="text" name="domicilio" placeholder="Domicilio" /></div>
								</div>
								
								<div class="row">
									<div class="6u"><input type="text" class="text" name="tel" placeholder="Teléfono" /></div>
								
									<div class="6u"><input type="text" class="text" name="email" placeholder="E-mail" /></div>
								</div>
								
								<div class="row">
									<div class="12u">
										<a href="#" class="button submit">Ingresar</a>
									</div>
								</div>
							</form>	

						</div>
					</section>
				
				<!-- Productos-->
					<section id="Productos" class="six">
						<div class="container">

							<header>
								<h2>Productos</h2>
							</header>							
							
							<p>Ingrese los siguientes datos:</p>
							
							<form method="post" action="app.html">
								
								<div class="row">
									<div class="6u"><input type="text" class="text" name="name" placeholder="Nombre" /></div>
								
									<div class="6u"><input type="text" class="text" name="cat" placeholder="Categoría" /></div>
								</div>
								
								<div class="row">
									<div class="6u"><input type="text" class="text" name="tel" placeholder="Foto" /></div>
								
									
								</div>
								
								<div class="row">
									<div class="12u">
										<a href="#" class="button submit">Ingresar</a>
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