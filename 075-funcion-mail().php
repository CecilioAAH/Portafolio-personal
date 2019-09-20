<?php

$destinatario = "user@mail.com";
$asunto = "Correo electrónico enviado desde PHP";
$mensaje = "Esta es una prueba de envío.";
mail($destinatario, $asunto, $mensaje);


/* La función mail() requiere que mínimamente le sean pasados
3 parámtros: destinario, asunto y mensaje:
 */








 /* cabeceras adicionales como parametro extra 
 $destinatario = "user@mail.com";
$asunto = "Correo electrónico enviado desde PHP";
$mensaje = "Esta es una prueba de envío.";
$cabeceras_adicionales = "From: Ana María López <anita@mail.com>\r\n";
$cabeceras_adicionales .= "Reply-to: Rocío Irao <rocio@mail.com>\r\n";
$cabeceras_adicionales . "Cc: Ariel Domingo <ariel@mail.com>\r\n";
$cabeceras_adicionales .= "Bcc: Supervisor <admin@mail.com>\r\n";
mail($destinatario, $asunto, $mensaje, $cabeceras_adicionales);

*/
?>