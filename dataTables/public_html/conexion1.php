<?php
$conexion1 = mysql_connect("localhost", "root", "") or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db("impresosgala", $conexion1);
mysql_query("SET NAMES 'utf8'");
?>
