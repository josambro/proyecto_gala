<?php
include ('funciones.php');
//usuario y clave pasados por el formulario
$usuario = $_POST['usuario'];
$clave = $_POST['password'];
//usa la funcion conexiones() que se ubica dentro de funciones.php
if (conexiones($usuario, $clave)){
	//si es valido accedemos a app.php
	header('Location:app.php');
} else {
	//si no es valido volvemos al formulario inicial
	header('Location: index.html');
}
?>