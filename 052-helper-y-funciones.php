<?php

/*
En programación, un helper es una función o conjunto de
funciones genéricas, de uso común, destinadas a servir de
ayuda a otros procesos dentro de un mismo sistema. 

ahora el algoritmo hace lo siguiente.
 Retorna la fecha actual en formato largo, corto o ISO (canónico)

 Argumentos:
 $formato -- largo, retorna la fecha actual en formato
 Lunes, 2 de Agosto de 2011

 corto, retorna la fecha en formato 02/08/2011

 ISO, retorna la fecha en formaro 2011-08-02
*/
function get_fecha_actual($formato) {
    // defino un array con los patrones de formato
    $formato_fecha = array(
    "largo" => "l, j \d\e F \d\e Y",
    "corto" => "d/m/Y",
    "ISO" => "Y-m-d",
    );
   
    // inicializo la variable $fecha
    $fecha = NULL;
   
    // compruebo que $formato sea un formato válido
    if(array_key_exists($formato, $formato_fecha)) {
    // si el formato es válido, reasigno el valor a $fecha
    $fecha = date($formato_fecha[$formato]);
    }
   
    // retorno la fecha formateada
    re

?>