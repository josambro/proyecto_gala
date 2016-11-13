<?php require_once('conexion2.php');
$cn=  Conectarse();
$listado=  mysql_query("select * from productos",$cn);
?>

 <script type="text/javascript" language="javascript" src="js/jslistadoproducto.js"></script>



                <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_productos">
                <center>   <a href="reporte/productorepo.php" class="btn btn-success">listado de productos</a></center> 
                <thead>
                        
                    <tr>
                        <th>codigo</th><!--Estado-->
                        <th>categoria</th>
                        <th>nombre</th>
                        <th>descripcion</th>
                        <th>precio</th><!--Estado-->
                        <th>editar</th>
                       
                 </tr>
                 </thead>
                 <tfoot>
                 <tr>
                        <th></th>
                        <th></th>
          
                 </tr>
                 </tfoot>
                  <tbody>
                  <?php  while( $reg= mysql_fetch_assoc($listado)){ ?>
                   
                               <tr>
                               <td ><?php echo $str=mb_convert_encoding($reg['idproductos'], "UTF-8")?></td>
                               <td><?php echo $str=mb_convert_encoding($reg['categoria_prod'], "UTF-8")?></td>
                               <td><?php echo $str=mb_convert_encoding($reg['nombre_prod'], "UTF-8")?></td>
                               <td><?php echo $str=mb_convert_encoding($reg['descripcion_prod'], "UTF-8")?></td>
                               <td><?php echo $str=mb_convert_encoding($reg['precio_prod'], "UTF-8")?></td>
                              
                                <td><center><a href="editarprod.php?idproductos=<?php echo $reg['idproductos']; ?>" class="btn btn-warning">Editar <img src="images/editar.png">
                                <a href="#" onclick="delEmpresa(<?php echo $reg['idproductos']; ?>);" class="btn btn-danger">Eliminar <img src="images/eliminar.png"></a></center></td>
          
                               </tr>
                   <?php } ?>
                <tbody>
                
            </table>
<script type="text/javascript">
function delEmpresa(idproductos) {
    if (window.confirm("Aviso:\nDesea eliminar el registro seleccionado?"+id_user)) {
        window.location = "eliminar.php?action=del&idproductos="+idproductos;   
    }
}
</script>


