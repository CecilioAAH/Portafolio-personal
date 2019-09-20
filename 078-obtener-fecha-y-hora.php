<?php

/* getdate() es la función indicada para obtener la información
relativa a la fecha y hora actual, en un array asociativo: */

$datos_fecha_hora = getdate();
print_r($datos_fecha_hora);
/*
Array
(
 [seconds] => 3
 [minutes] => 53
 [hours] => 16
 [mday] => 15
 [wday] => 4
 [mon] => 3
 [year] => 2012
 [yday] => 74
 [weekday] => Thursday
 [month] => March
 [0] => 1331841183
) 
*/

?>