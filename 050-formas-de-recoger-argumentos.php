<?php


//recibir argumentos de un array
// función callable
function callable_func_1($arg1, $arg2, $arg3) {
    $result = ($arg1 + $arg2) * $arg3;
    return $result;
   }
   // función que hará la llamada de retorno
   function forma_1($funcion, $argumentos=array()) {
    $result = NULL;
   
    if(is_callable($funcion)) {
    $result = call_user_func_array($funcion, $argumentos);
    } 

    return $result;
}
// implemenatción
$args = array(10, 5, 2);
$resultado = forma_1('callable_func_1', $args);
echo $resultado;

?>