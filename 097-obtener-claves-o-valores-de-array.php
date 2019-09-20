<?php

/* Obtener todas las claves de un array o
todos los valores
array_keys($array) - array_values($array)
 */

$libro = array(
    'Titulo' => 'Manual de PHP',
    'Subtitulo' => 'Trabajando con arrays',
    'Autor' => 'Eugenia Bahit',
    'Fecha' => '12/10/2011',
   );
   $claves = array_keys($libro);
   $valores = array_values($libro);
   print_r($claves);
   /*
   Array
   (
    [0] => Titulo
    [1] => Subtitulo
    [2] => Autor
    [3] => Fecha
   )
   */
   print_r($valores);
   /*
   Array
   (
    [0] => Manual de PHP
    [1] => Trabajando con arrays
    [2] => Eugenia Bahit
    [3] => 12/10/2011
   )
   */

?>