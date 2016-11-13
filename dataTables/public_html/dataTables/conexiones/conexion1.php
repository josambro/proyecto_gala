<?php

$conexion1 = mysql_connect("mysql.hostinger.es", "u562315173_root", "umg2013*") or trigger_error(mysql_error(),E_USER_ERROR); 

mysql_select_db("u562315173_tutos", $conexion1);

mysql_query("SET NAMES 'utf8'");

?>

