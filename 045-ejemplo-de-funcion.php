<?php

// definimos una variable de ámbito global
$mi_variable_global = 10;
// definimos una función que modificará la variable global
function modificar_variable_global(&$variable, $otro_parametro) {
 $variable = $variable * $otro_parametro;
}
// llamamos a la función pasando como referencia la variable global
modificar_variable_global($mi_variable_global, 2);
// imprimimos la variable global
echo $mi_variable_global; // salida: 20



/* o tambien podemos utilizar 
// definimos una variable de ámbito global
$mi_variable_global = 10;
// definimos la función que hará referencia a la variable global
function modificar_variable_global($otro_parametro) {
 global $mi_variable_global;
 $mi_variable_global = $mi_variable_global * $otro_parametro;
}
// llamamos a la función
modificar_variable_global(2);
// imprimimos la variable global
echo $mi_variable_global; // salida: 20

*/

?>