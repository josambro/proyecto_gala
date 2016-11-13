

<?php

require("conexiones/conexion1.php");
require("funcion/funciones.php");
 
$id_user = getParam($_GET["id_user"], "-1");
$action = getParam($_GET["action"], "");

if ($action == "del") {
   
    echo 'identificador'+$id_user;
    $sql = "DELETE FROM  tbl_usuarios WHERE id_user = ".sqlValue($id_user,"int");

    mysql_query($sql, $conexion1);
        header("location: index.php");

}

?>