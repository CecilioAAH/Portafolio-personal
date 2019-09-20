<?php

/* Agregar elementos al final del array
array_push($array, $valores) */

$personas = array('Juan', 'Emilio');
array_push($personas, 'Miguel', 'Ana', 'Herminio');
print_r($personas);
/*
Array
(
 [0] => Juan
 [1] => Emilio
 [2] => Miguel
 [3] => Ana
 [4] => Herminio
)
*/

/* Agregar elementos al comienzo del array
array_unshift($array, $valores)
 */

$personas = array('Juan', 'Emilio');
array_unshift($personas, 'Miguel', 'Ana', 'Herminio');
print_r($personas);
/*
Array
(
 [0] => Miguel
 [1] => Ana
 [2] => Herminio
 [3] => Juan 
 [4] => Emilio
)
*/

?>