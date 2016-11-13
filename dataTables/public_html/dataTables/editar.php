<?php
error_reporting(0);
require("conexiones/conexion1.php");
require("funcion/funciones.php");

$id = getParam($_GET["id_user"], "-1");
$action = getParam($_GET["action"], "");

if ($action == "edit") {
	$id = sqlValue($_POST["id_user"], "int");
	$nombre = sqlValue($_POST["usr_nombre"], "varchar");
	$puesto = sqlValue($_POST["usr_puesto"], "varchar");
	$nick = sqlValue($_POST["usr_nick"], "varchar");
        $status = sqlValue($_POST["usr_status"], "varchar");
        
        
        $sql = "UPDATE tbl_usuarios SET ";
	$sql.= " usr_nombre=".$nombre.", usr_puesto=".$puesto.", usr_nick=".$nick.", usr_status=".$status." ";
	$sql.= "WHERE id_user=".$id;
	mysql_query($sql, $conexion1);
        header("location: index.php");
}

$sql = "SELECT * FROM tbl_usuarios WHERE id_user = ".sqlValue($id, "int");
$queEmp = mysql_query($sql, $conexion1);
$reg = mysql_fetch_assoc($queEmp);
$total = mysql_num_rows($queEmp);
if ($total == 0) {
	header("location: index.php");
	exit;
}

?>
<!DOCTYPE html>
<html>
    <head>
      
        <meta charset="utf-8">
        <!--    ESTILO GENERAL   -->
        <link type="text/css" href="css/style.css" rel="stylesheet" />
                
   <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/docs.css" rel="stylesheet">
    <link href="bootstrap/js/google-code-prettify/prettify.css" rel="stylesheet">

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

    </head>
    
       
    <body>
    
   <div class="hero-unit">
   <img src="images/IMPRESOS.png">
  
 <div class="bs-docs-example">
            <div class="navbar">
              <div class="navbar-inner">
                <ul class="nav">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="PRODUCTOS">PRODUCTOS</a></li>
                  <li><a href="PROVEDORES">PROVEEDORES</a></li>
                </ul>
              </div>
            </div>
       
      
          </div>
   </div>
        
   <title>IMPRESOS GALA</title>
<link rel="shortcut icon" href="images/aaaaa2.png">
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body> 
    <div class="highlight">
    <div class="row-fluid" style=" text-align: center;">
  
    <h3>EMPLEADO </h3>
    <form  method="post" id="editar" action="editar.php?action=edit">

    <label>Nombre</label>
    <input type="text" id="usr_nombre" name="usr_nombre" required value="<?php echo $reg["usr_nombre"]; ?>" />
    <br />
    <label >puesto</label>
    <input type="text" id="usr_puesto" name="usr_puesto" required value="<?php echo $reg["usr_puesto"]; ?>" />
    <br />
    <label>nick</label>
    <input type="text" id="usr_nick" name="usr_nick" required value="<?php echo $reg["usr_nick"]; ?>" />
    <br /> 
    <label >status</label>
    <input type="text" id="usr_status" name="usr_status" required value="<?php echo $reg["usr_status"]; ?>" />
    <br />
   <input type="hidden" id="id_user" name="id_user" value="<?php echo $reg["id_user"]; ?>" />
    <button type="submit" class="btn btn-info">Guardar</button>
    <button type="reset" class="btn btn-warning">Limpiar</button>
</form> 
</table>
</div>
  </div>      
        
        
        
        
        
        
        
        
        
        

 

    
    <footer>
        <img src="images/pie.png"> APP
    </footer>
        


</body>
</html>




