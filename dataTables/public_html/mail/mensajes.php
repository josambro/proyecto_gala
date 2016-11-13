<html>
    <body>
    <form method="POST">
	<label for="nombre">nombre</label>
	<input type="text" name="nombre"  required id="nombre"/><br/>
  <label for="correo">e-mail</label>
	<input type="text" name="mail" required pattern="[^ @]*@[^ @]*" id="mail"/><br/>
	<label for="asunto">Asunto</label>
	<input type="text" name="asunto"  required id="asunto"/><br/>
	<label for="mensaje">Mensaje</label>
	<textarea color="25" name="mensaje"  required ></textarea><br/>
<?php

require_once('recaptchalib.php'); //libreria descargarda de Google

// Llaves creadas en Google
$publickey = "6LfpbekSAAAAAGeV09CnAV5vuyAfEI2fxLnlk-yL"; //llave publica
$privatekey = "6LfpbekSAAAAANxkSihZwe_PeMdFbMVeCPrK1sTM"; //lave privada

//Respuesta de reCAPTCHA
$resp = null;
# Errores de reCAPTCHA si es que hay
$error = null;

# was there a reCAPTCHA response?
if ($_POST["recaptcha_response_field"]) { //Si la variable existe es decir, fué enviado desde un Formulario
//la función necesita la llave privada, la IP del usuario, el campo "desafio" y el campo "respuesta" que dió el usuario
        $resp = recaptcha_check_answer ($privatekey, 
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]); //Cuando recibimos los datos por el formulario, procedemos a hacer la verificacion en reCATPCHA

        if ($resp->is_valid) {
               
            
$para = "cosultasgala@impresosgala.hol.es";
$nombre = $_POST["nombre"];
$asunto = "consultaas enviado por $nombre: ".$_POST["asunto"];
$mensaje = $_POST["mensaje"];
$de = $_POST["mail"];

$headers = "MIME-Version:1.0; \r\n";
$headers .= "Content-type: text/html \r\n charset=iso-8859-1; \r\n";
$headers .= "From: $de \r\n";
$headers .= "To: $para; \r\n Subject:$asunto \r\n";

if(mail($para,$asunto,$mensaje,$headers))
	echo "enviados correctamente";
	else
	echo "fallo de envio";
            
            
         } else {
                //En caso falló el reCAPTCHA
           echo $error; $error = $resp->error; //Si deseas muestras los errores
        echo $error;
          echo "fallo de envio";
     
				//Aqui va por ejemplo la reimpresion del formulario y el mensaje de reCAPTCHA invalido, etc.
        }
}
echo recaptcha_get_html($publickey, $error); //imprimimos el formulario de reCATPCHA
?>
 <br/>
   <input type="submit" value="enviar">
     </form>
  </body>
</html>