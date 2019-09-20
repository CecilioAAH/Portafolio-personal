<?php

$nombres = array('Ana', 'Julia', 'Luisa', 'Alberto', 'Cecilia', 'Carlos',);
foreach($nombres as &$nombre) {
 $nombre = strtoupper($nombre);
}
print_r($nombres);
/*
Array
(
 [0] => ANA
 [1] => JULIA
 [2] => LUISA
 [3] => ALBERTO
 [4] => CECILIA
 [5] => CARLOS
)
*/
?>