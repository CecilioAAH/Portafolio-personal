<?php

/* Filtrar datos de un array, utilizando una
función de retorno
array_filter($array, $funcion) */

$datos = array(25, 43.2, 64.98, 33.7, 'luna', 95, 32, 60.05, 'agua', 'sol');
function retornar_enteros($dato) {
 if(is_int($dato)) {
 return $dato;
 }
}
function retornar_otros_datos($dato) {
 if(!is_int($dato)) {
 return $dato;
 }
}
$enteros = array_filter($datos, 'retornar_enteros');
$otros_datos = array_filter($datos, 'retornar_otros_datos');
print_r($enteros);
/*
Array
(
 [0] => 25
 [5] => 95
 [6] => 32
)
*/
print_r($otros_datos);
/*
Array
(
 [1] => 43.2
 [2] => 64.98
 [3] => 33.7
 [4] => luna
 [7] => 60.05
 [8] => agua
 [9] => sol
)
*/

?>