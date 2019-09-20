<?php

/* Ordenar un array de menor a mayor
sort($array) */

$nombres = array('Noemi', 'Diego', 'Ana', 'Eliseo');
sort($nombres);
print_r($nombres);
/*
Array
(
 [0] => Ana
 [1] => Diego
 [2] => Eliseo
 [3] => Noemi
)
*/

/* Ordenar un array de mayor a menor
rsort($array) */

$nombres = array('Noemi', 'Diego', 'Ana', 'Eliseo');
rsort($nombres);
print_r($nombres);
/*
Array
(
 [0] => Noemi
 [1] => Eliseo
 [2] => Diego
 [3] => Ana
)
*/

/* Ordenar un array de menor a mayor
manteniendo la relación con los índices
asort($array)
 */

$nombres = array('Noemi', 'Diego', 'Ana', 'Eliseo');
asort($nombres);
print_r($nombres);
/*
Array
(
 [2] => Ana
 [1] => Diego
 [3] => Eliseo
 [0] => Noemi
)
*/

/* Ordenar un array de mayor a menor
manteniendo la relación con los índices
arsort($array)
 */

$nombres = array('Noemi', 'Diego', 'Ana', 'Eliseo');
arsort($nombres);
print_r($nombres);
/*
Array
(
 [0] => Noemi
 [3] => Eliseo
 [1] => Diego
 [2] => Ana
)
*/













?>