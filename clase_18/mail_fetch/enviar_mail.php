<?php

// definir variables

// funcion de seguridad no tocar
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




  $nombre = test_input($_POST["nombre"]);
  $email = test_input($_POST["email"]);
  $telefono = test_input($_POST["telefono"]);
  $consulta = test_input($_POST["consulta"]);

  







$para  = 'gustavo@malcotti.com';// . ', '; // atención a la coma
$asunto = "Consulta web";
// título
$titulo = 'Consulta para .....';

// mensaje
$mensaje = "
<html>
<head>
 <title>$titulo</title>
</head>
<body>
<hr>
<h3> $titulo</h3>
  <p><b>Nombre:</b>  $nombre</p>
  <p><b>Email:</b>  $email</p>
  <p><b>Teléfono:</b>  $telefono</p>
  <hr>
  <h3>Consulta:</h3>
  $consulta
 
<hr>
</body>
</html>
";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= "From: $nombre <$email>" . "\r\n";



//mail($para, $asunto, $mensaje, $cabeceras);

echo "ok";

 ?>

