<?php
$Nombre = $_POST['Nombre'];
$mail = $_POST['Email'];
$Telefono = $_POST['Telefono'];
$message = $_POST['Incidente'];
$nameFile = $_FILES['archivo']['name'];
$sizeFile = $_FILES['archivo']['15MB']
$typeFile=$_FILES['archivo'][imagejpeg,png2wbmp]

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";



$mensaje = "Este mensaje fue enviado por " . $Nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Telefono: " . $_POST['Telefono'] . " \r\n";
$mensaje .= "Incidente y detalles" . $_POST['Incidente']

$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'lupiss_baezz@outlook.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>
