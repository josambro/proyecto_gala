<?php require_once('conexion2.php');
$cn=  Conectarse();
$listado=  mysql_query("select * from tbl_usuarios",$cn);
?>

 <script type="text/javascript" language="javascript" src="js/jslistadopaises.js"></script>



            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista_paises">
            <center>   <a href="reporte/php-mysql.php" class="btn btn-success">listado de usuarios</a></center> 
                <thead>
                        
                    <tr>
                        <th>id</th><!--Estado-->
                        <th>nombre</th>
                         <th>puesto</th>
                          <th>nick</th>
                           <th>status</th><!--Estado-->
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
                               <td ><?php echo $str=mb_convert_encoding($reg['id_user'], "UTF-8")?></td>
                               <td><?php echo $str=mb_convert_encoding($reg['usr_nombre'], "UTF-8")?></td>
                               <td><?php echo $str=mb_convert_encoding($reg['usr_puesto'], "UTF-8")?></td>
                               <td><?php echo $str=mb_convert_encoding($reg['usr_nick'], "UTF-8")?></td>
                               <td><?php echo $str=mb_convert_encoding($reg['usr_status'], "UTF-8")?></td>
                              
                                <td><center><a href="editar.php?id_user=<?php echo $reg['id_user']; ?>" class="btn btn-warning">Editar <img src="images/editar.png">
                                <a href="#" onclick="delEmpresa(<?php echo $reg['id_user']; ?>);" class="btn btn-danger">Eliminar <img src="images/eliminar.png"></a></center></td>
                                
                             
                             
                               
                               
                               </tr>
                     
                        
                   <?php } ?>
                <tbody>
                
            </table>
 
 
<script type="text/javascript">
function delEmpresa(id_user) {
    if (window.confirm("Aviso:\nDesea eliminar el registro seleccionado?"+id_user)) {
        window.location = "eliminar.php?action=del&id_user="+id_user;   
    }
}
</script>

