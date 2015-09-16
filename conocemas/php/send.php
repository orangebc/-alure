<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Departamentos de lujo Colonia Nápoles</title>
</head>
<body>
<?php
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	$celular = $_POST['celular'];
	$to = 'gerardo@orangeboutiquecreativa.com, ediaz@ideasinmobiliarias.com,  roxana@ideasinmobiliarias.com ';
	$title = 'Alure Landing Page';
	$from = "no-reply@alure.mx";

	$headers .= 'From: ' . $from . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	$message = '<html><body><head><meta charset="UTF-8"></head>';
	$message .= 'ID: <strong>Alure </strong><br><br>';
	$message .= 'Nombre de Cliente: ' . '<strong>' .$nombre .' '. $apellidos . '</strong><br><br>';
	$message .= 'Email: ' . '<strong>' . $email . "</strong><br><br>";
	$message .= 'Celular: ' . '<strong>' . $celular . "</strong><br><br>";
	$message .= '</body></html>';

  
	if ($_POST['submit']) {
	if (mail($to, $title, $message, $headers )) {

	echo '
	<script type="text/javascript">		
			alert("Gracias, en breve nos comunicaremos con usted.");
	</script>
	<!-- Google Code for Registro Alure Conversion Page -->
			<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 949786323;
			var google_conversion_language = "en";
			var google_conversion_format = "3";
			var google_conversion_color = "ffffff";
			var google_conversion_label = "ruwPCN7O9V0Q063yxAM";
			var google_remarketing_only = false;
			/* ]]> */
			</script>
			<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
			</script>
			<noscript>
			<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/949786323/?label=ruwPCN7O9V0Q063yxAM&amp;guid=ON&amp;script=0"/>
			</div>
			</noscript>
		<script type="text/javascript">	
		window.location.href = "http://www.alure.mx/conocemas"
		</script>'; 
		} else { 
			echo 'Falló el envio'; } 
		}
?>
</body>
</html>

