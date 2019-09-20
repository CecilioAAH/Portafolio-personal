<?php

/* Podemos obtener la posición actual del puntero, con la función
ftell($recurso) y movernos hacia el byte indicado, con
fseek($recurso, $byte).
Un contador de visitas sencillo */




function contador_de_visitas() {
    $archivo = "contador.txt";
    $recurso = fopen($archivo, "r+");
    $bytes_totales = filesize($archivo);
    $contador = fread($recurso, $bytes_totales);
    $nuevo_contenido = $contador + 1;
    $posicion_actual = ftell($recurso);
    if($posicion_actual == $bytes_totales) {
    // me muevo al byte 0 para sobreescribir el archivo
    fseek($recurso, 0);
    }
    fwrite($recurso, $nuevo_contenido);
    fclose($recurso);
   
    return $nuevo_contenido;
   }
   // Actualizar el número de visitas y mostrarlo
   echo contador_de_visitas();
   

?>