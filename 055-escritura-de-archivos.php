<?php

$archivo = "archivo.txt"; #nombre del archivo
$recurso = fopen($archivo, "a+"); #abrir archivo
$nuevo_contenido = "nuevo contenido"; //el contenido
fwrite($recurso, $nuevo_contenido); //escribir contenido
$bytes = filesize($archivo); //tamaño del archivo
$contenido = fread($recurso, $bytes); //leer contenido creo
fclose($recurso); //cerrar el cursor (liberar memoria)


?>