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
								<li><a href="#Ingresos" id="Ingresos-link" class="skel-panels-ignoreHref"><span class="icon icon-th-list">Ingresos</span></a></li>
								<li><a href="#Usuarios" id="Usuarios-link" class="skel-panels-ignoreHref"><span class="icon icon-user">Usuarios</span></a></li>								
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
					
				<!-- Ingresos -->
					<section id="Ingresos" class="one">
						<div class="container">					

							<header>
								<?php
								$Regresar = "ingresos.php#Usuarios";
								include ('funciones.php');
								//uso de la funcion verificar_usuario()
								if (verificar_usuario()){
									//si el usuario es verificado puede acceder al contenido permitido a el
									print "<div class='12u'><a href='ingresos.php#Usuarios' class='button scrolly'><span class='icon icon-home'> Regresar</span></a>	";
									print "<a href='salir.php' class='button scrolly'><span class='icon icon-signout'> Cerrar Sesión</span></a></div></br>";
									print "<br><h3>Bienvenido $_SESSION[usuario]</h3>";
								} else {
									//si el usuario no es verificado volvera al formulario de ingreso
									header('Location:index.php');
								}
								?>							
								<h2 class="alt"> Ingresos <strong>Impresos Gala</strong></h2>
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
													
							<?php
							include ("conexion.php");
							if(isset($_POST['usuario']) && !empty($_POST['usuario']) &&									
									isset($_POST['password']) && !empty($_POST['password']) )
							{
							   $con= mysql_connect($host,$user,$pw)or die("<p><h3>Problemas al conectar al servidor</p></h3>");
								mysql_select_db($db,$con)or die("Problemas al seleccionar base de datos ");								

								mysql_query("INSERT INTO usuarios (nombre,contrasena)VALUES ('$_POST[usuario]','$_POST[password]')",$con);

								echo "<p><h3>DATOS INSERTADOS</p></h3>"; 
								print "<div class='12u'><a href='ingresos.php#Usuarios' class='button scrolly'><span class='icon icon-home'> Regresar</span></a>	";
								print "<meta http-equiv=Refresh content=\"2 ; url=ingresos.php#Usuarios\">"; 
								
								//header('Location:ingresos.php');
							
							}
							else{
								echo "<p><h3>¡ERROR! ALGÚN CAMPO ESTA VACÍO</h3></p>"; 
								print "<div class='12u'><a href='ingresos.php#Usuarios' class='button scrolly'><span class='icon icon-home'> Regresar</span></a>	";
								print "<meta http-equiv=Refresh content=\"2 ; url=$Regresar\">"; 
							}
							?> 
							<script language="javascript"> 
							//alert("¡ERROR! ALGÚN CAMPO ESTA VACÍO"); 
							</script> 
						<br></br><br></br>
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