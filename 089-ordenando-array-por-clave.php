<?php

/* Ordenar un array de menor a mayor por
su clave
ksort($array) */

$personas = array(
    'Nombre' => 'Miguel',
    'Apellido' => 'Montero',
   );
   ksort($personas);
   print_r($personas);
   /*
   Array
   (
    [Apellido] => Montero
    [Nombre] => Miguel
   )
   */

 /*  Ordenar un array de mayor a menor por
  su clave
  krsort($array)
 */  

$personas = array(
    'Nombre' => 'Miguel',
    'Apellido' => 'Montero',
    'Talle' => 'XL',
   );
   krsort($personas);
   print_r($personas);
   /*
   Array
   (
    [Talle] => XL
    [Nombre] => Miguel
    [Apellido] => Montero
   )
   */










?>