<?php

$archivo = "archivo.txt"; // nombre del archivo
$bytes = filesize($archivo); // tamaño del archivo
$cursor = fopen($archivo, "r"); // abrir archivo
$contenido = fread($cursor, $bytes); // leer contenido
fclose($cursor); // cerrar el cursor (liberar memoria)

?>