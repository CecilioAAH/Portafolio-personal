<?php

/* Eliminar el último elemento de un array
array_pop($array) */

$personas = array('Juan', 'Emilio', 'Ana');
array_pop($personas);
print_r($personas);
/*
Array
(
 [0] => Juan
 [1] => Emilio
)
*/

/* Eliminar valores duplicados en un array
array_unique($array) */

$personas = array('Juan', 'Emilio', 'Ana', 'Emilio');
$personas = array_unique($personas);
print_r($personas);
/*
Array
(
 [0] => Juan
 [1] => Emilio
 [2] => Ana
)
*/













?>