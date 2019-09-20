<?php

/*
 Llama a la función indicada y reasigna el valor de una variable
 global, formateado por la función indicada

 Argumentos:
 $variable -- variable global a ser modificada
 $funcion -- función a la cual debe llamarse para dar formato a $variable
 $argumentos -- (opcional) parámetros que eventualmente puedan
 ser requeridos por $funcion
*/
function set_variable_global(&$variable, $funcion, $argumentos=array()) {
    // compruebo que $funcion sea una función callable
    if(is_callable($funcion)) {
    $variable = call_user_func_array($funcion, $argumentos);
    }

?>