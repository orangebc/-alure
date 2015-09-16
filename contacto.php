<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contacto Entre Alamedas</title>
</head>
<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$diacita = $_POST['diacita'];
$mensaje = $_POST['mensaje'];
$para = 'roxana@ideasinmobiliarias.com, ediaz@ideasinmobiliarias.com';
$titulo = 'CITA ALURE NUEVA YORK';
$header = 'From: ' . $nombre;
$msjCorreo = "DATOS DE CONTACTO

Nombre de Cliente: $nombre

Mail:$email 

Telefono: $telefono

Mensaje:$mensaje

Dia Reservación: $diacita";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Gracias, en breve enviaremos información.');
window.location.href = 'http://www.alure.mx/';
</script>";
} else {
echo 'Falló el envio';
}
}
?>

<body>
</body>
</html>