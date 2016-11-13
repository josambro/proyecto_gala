<?php

require_once('class.ezpdf.php');

$pdf =& new Cezpdf('a4');

$pdf->selectFont('../fonts/courier.afm');

$pdf->ezSetCmMargins(1,1,1.5,1.5);



$conexion = mysql_connect("mysql.hostinger.es", "u562315173_root","umg2013*");

mysql_select_db("u562315173_tutos", $conexion);

$queEmp = "SELECT id_user,usr_nombre,usr_puesto,usr_nick,usr_status FROM tbl_usuarios ORDER BY usr_nombre ASC";

$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

$totEmp = mysql_num_rows($resEmp);



$ixx = 0;

while($datatmp = mysql_fetch_assoc($resEmp)) { 

	$ixx = $ixx+1;

	$data[] = array_merge($datatmp, array('num'=>$ixx));

}

$titles = array(

				

                              'id_user'=>'<b>ID USUARIO</b>',

				'usr_nombre'=>'<b>NOMBRE</b>',

				'usr_puesto'=>'<b>PUESTO</b>',

				'usr_nick'=>'<b>NICK</b>',

                                'usr_status'=>'<b>STATUS</b>'

			);

$options = array(

				'shadeCol'=>array(0.9,0.9,0.9),

				'xOrientation'=>'center',

				'width'=>500

			);

$txttit = "<b>IMPRESOS GALA</b>\n";

$txttit.= "REPORTE DE USUARIOS";



$pdf->ezText($txttit, 12);

$pdf->ezTable($data, $titles, '', $options);

$pdf->ezText("\n\n\n", 10);

$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);

$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);

$pdf->ezStream();

?>