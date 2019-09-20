<?php

if(mail($destinatario, $asunto, $mensaje, $cabeceras)) {
    echo "El e-mail se ha enviado satisfactoriamente."; 
} else {
    echo "Se ha producido un error al intentar enviar el e-mail";
   }

/*    La función mail() abre un socket SMTP en cada
llamada. Si bien puede utilizarse esta función, para realizar
envíos iterativos (mediante un bucle for, por ejemplo), se
desaconseja iterar sobre esta función en envíos
masivos */

?>