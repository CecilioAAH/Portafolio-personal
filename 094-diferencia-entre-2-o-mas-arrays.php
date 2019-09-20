<?php

//array_diff($array_1, $array_2[, $array_3, ….])

$frutas_1 = array('pera', 'manzana', 'durazno', 'melón', 'sandía', 'kiwi',
 'mandarina', 'naranja', 'limón', 'lima', 'pomelo');
$frutas_2 = array('pera', 'manzana', 'durazno', 'melón', 'sandía', 'kiwi',
 'mandarina', 'lima', 'pomelo');
$diferencias = array_diff($frutas_1, $frutas_2);
echo "Las siguientes frutas no están en los 2 arrays:" . Chr(10);
foreach($diferencias as $fruta_no_repetida) {
 echo "- {$fruta_no_repetida}" . Chr(10);
}
/*
Las siguientes frutas no están en los 2 arrays:
- naranja
- limón
*/



?>