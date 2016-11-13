<?php
$para = "cosultasgala@impresosgala.hol.es";
$nombre = $_POST["nombre"];
$asunto = "mi pagina enviado por $nombre: ".$_POST["asunto"];
$mensaje = $_POST["mensaje"];
$de = $_POST["mail"];

$headers = "MIME-Version:1.0; \r\n";
$headers .= "Content-type: text/html; \r\n charset=iso-8859-1; \r\n";
$headers .= "From: $de \r\n";
$headers .= "To:$para; \r\n Subject:$asunto \r\n";

if(mail($para,$asunto,$mensaje,$headers))
	echo "eviados correctamente";
	else
	echo "fallo de envio";
 ?>