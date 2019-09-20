<?php

/* ¿Qué edad tiene...?
Problema:
Lucas, nació el 27 de Septiembre de 1978 ¿Qué edad tiene
hoy?
 */

 // obtengo la marca de tiempo de la fecha de nacimiento
$fecha_nacimiento = mktime(0, 0, 0, 9, 27, 1978);
// obtengo la marca de tiempo de la fecha actual
$hoy = mktime();
// obtengo la diferencia entre fecha de nacimiento y hoy
$diferencia = $hoy - $fecha_nacimiento;
// obtengo la edad
$edad = $diferencia / (365 * 24 * 60 * 60); # años que pasaron entre 2 fechas
// imprimo la edad
echo (int)$edad;

?>