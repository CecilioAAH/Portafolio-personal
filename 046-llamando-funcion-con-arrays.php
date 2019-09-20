<?php

// Función que llamaré con call_user_func_array
function sumar_dos_numeros($a, $b) { 
    return $a + $b;
}
$args = array(5, 10);
$resultado = call_user_func_array('sumar_dos_numeros', $args);
echo $resultado;

?>