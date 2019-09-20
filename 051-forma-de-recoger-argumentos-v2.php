<?php

// función callable
function callable_func_1($arg1, $arg2, $arg3) {
    $result = ($arg1 + $arg2) * $arg3;
    return $result;
   }
   // función que hará la llamada de retorno
   function forma_2() {
    $num_args = func_num_args();
    $args = func_get_args();
    $result = NULL;
   
    // verifico que al menos se reciba 1 argumento
    if($num_args >= 1) {
    // obtengo el nombre de la función (asumo que es el 1er arg.)
    $funcion = func_get_arg(0);
   
    // elimino el nombre de la función de los argumentos
    array_shift($args); // elimino el índice 0
   
    // verifico que sea una función callable y la llamo
    if(is_callable($funcion)) {
    $result = call_user_func_array($funcion, $args);
    }
    }
   
    return $result;
   }
   // implementación
   $funcion = 'callable_func_1';
   $arg1 = 10;
   $arg2 = 5;
   $arg3 = 2;
   $resultado = forma_2($funcion, $arg1, $arg2, $arg3);
   echo $resultado;
   

?>