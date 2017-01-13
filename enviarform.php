<?php

@$nombres = addslashes($_POST['nombres']);
@$empresa = addslashes($_POST['empresa']);
@$correo = addslashes($_POST['correo']);
@$servicio = addslashes($_POST['servicio']);
@$consulta = addslashes($_POST['consulta']);

$cabecemail = "From: $correo\n"
        . "Reply-To: $correo\n";
$asunto = "Mensaje desde el formulario de contacto de MEDIAIMPACT.PE"; //asunto del mensaje
$contenido = "$nombres ha enviado un mensaje desde el formulario de contacto, estos son sus datos:"
        . "\n"
        . "Apellido y nombre: $nombres\n"
        . "Empresa: $empresa\n"
        . "Email: $correo\n"
        . "Servicio: $servicio\n"
        . "Consulta: $consulta\n"
        . "\n";

$email_to = "aeroerick88@gmail.com";

if (@mail($email_to, $asunto, $contenido, $cabecemail)) {
    $extra = './';
    header("location: $extra");
}
?>