<?php
/* Diviendo y uniendo arrays
Dividir un array en matrices más
pequeñas
array_chunk($array, $tamaño[, boolean
$conservar_claves])
Nótese que el tercer argumento es opcional. Por defecto,
array_chunk, creará nuevas claves en los nuevos array. Pero si
se indica TRUE, conserverá estas claves.
 */


$personas = array('Juan', 'Emilse', 'Pedro', 'Eliseo', 'Rosa', 'Noelia',
 'Raul', 'Esteban', 'Diego');
$grupos = array_chunk($personas, 3);
print_r($grupos); /*
Array
(
 [0] => Array
 (
 [0] => Juan
 [1] => Emilse
 [2] => Pedro
 )
 [1] => Array
 (
 [0] => Eliseo
 [1] => Rosa
 [2] => Noelia
 )
 [2] => Array
 (
 [0] => Raul
 [1] => Esteban
 [2] => Diego
 )
) */ 

/* Con una iteración, incluso, podríamos asignar los grupos
creados a nuevos array: */

$personas = array('Juan', 'Emilse', 'Pedro', 'Eliseo', 'Rosa', 'Noelia',
 'Raul', 'Esteban', 'Diego');
$grupos = array_chunk($personas, 3);
foreach($grupos as $numero=>$grupo) {
 $nombre_array = "grupo_{$numero}";
 $$nombre_array = $grupo;
}



/* Obtener la porción específica de un array
array_slice($array, $desde[, $hasta]) */

$personas = array('Juan', 'Emilse', 'Pedro', 'Eliseo', 'Rosa', 'Noelia',
 'Raul', 'Esteban', 'Diego');
$primeras_3_personas = array_slice($personas, 0, 3);
print_r($primeras_3_personas);
/*
Array
(
 [0] => Juan
 [1] => Emilse
 [2] => Pedro
)
*/
$personas_restantes = array_slice($personas, 3);
print_r($personas_restantes);
/*
Array
(
 [0] => Eliseo
 [1] => Rosa
 [2] => Noelia
 [3] => Raul
 [4] => Esteban
 [5] => Diego
)
*/

/* Combinar dos arrays, utilizando uno para
las claves y otro para los valores
array_combine($array_claves, $array_valores) */

$comodines = array('{TITULO}', '{SUBTITULO}');
$valores = array('Manual de PHP', 'Trabajando con arrays');
$datos = array_combine($comodines, $valores);
print_r($datos);
/*
Array
(
 [{TITULO}] => Manual de PHP
 [{SUBTITULO}] => Trabajando con arrays
)
*/


/* Combinar dos o más arrays
array_merge($array_1, $array_2[, $mas_arrays])
 */

$grupo_a = array('Eliseo', 'Noemi', 'Santiago');
$grupo_b = array('Diego', 'Cecilia', 'Roman');
$personas = array_merge($grupo_a, $grupo_b);
print_r($personas);
/*
Array
(
 [0] => Eliseo
 [1] => Noemi
 [2] => Santiago
 [3] => Diego
 [4] => Cecilia
 [5] => Roman
)
*/

/* Combinar dos o más arrays
multidimensionales de manera recursiva
array_merge_recursive($array_1, $array_2[,
$mas_arrays])
 */
$persona_a = array('Nombre'=>'Eliseo', 'Edad'=>25);
$persona_b = array('Nombre'=>'Miriam', 'Edad'=>37);
$personas = array_merge_recursive($persona_a, $persona_b);
print_r($personas);
/*
Array
(
 [Nombre] => Array
 (
 [0] => Eliseo
 [1] => Miriam
 )
 [Edad] => Array
 (
 [0] => 25
 [1] => 37
 ) 
)
*/












?>