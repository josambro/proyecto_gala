<?php
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$conexion = mysql_connect("localhost", "root","");
mysql_select_db("tutosweb", $conexion);
$queEmp = "SELECT idproductos,categoria_prod,nombre_prod,descripcion_prod,precio_prod FROM productos ORDER BY nombre_prod ASC";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				
                                'idproductos'=>'<b>ID PRODCUTO</b>',
				'categoria_prod'=>'<b>CATEGORIA</b>',
				'nombre_prod'=>'<b>NOMBRE</b>',
				'descripcion_prod'=>'<b>DESSCRIPCION</b>',
                                'precio_prod'=>'<b>PRECIO UNIDAD</b>'
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
                        
$txttit = "<b>IMPRESOS GALA</b>\n";

$txttit.= "<b>REPORTE DE USUARIOS</b>\n";
$pdf->ezImage("pie.jpg", 2, 100, 'none', 'left');
$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("h:i:s")."\n\n", 10);
$pdf->ezStream();
?>