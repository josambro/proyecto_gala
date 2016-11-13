<?php
function Conectarse(){
$servidor="mysql.hostinger.es";
$basededatos="u562315173_tutos";
$usuario="u562315173_root";
$clave="umg2013*";
$cn=mysql_connect($servidor,$usuario,$clave) or die ("Error conectando a la base de datos");
mysql_select_db($basededatos ,$cn) or die("Error seleccionando la Base de datos");
mysql_query ("SET NAMES 'utf8'");
return $cn;}
?>