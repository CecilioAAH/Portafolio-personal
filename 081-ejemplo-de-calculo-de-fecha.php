<?php

/* ¿Cuánto tiempo ha pasado?
Problema:
El 15 de marzo de 2011, Natalia le comentó a su madre, que
comenzaría a ahorrar dinero para comprar un nuevo ordenador
y que a tal fin, todos los días guardaría en una caja de zapatos,
$2,75. ¿Cuánto dinero habrá ahorrado Natalia a la fecha de
hoy? */


// obtengo la marca de tiempo para el 15/03/2011
$fecha_inicio = mktime(0, 0, 0, 3, 15, 2011);
// obtengo la marca de tiempo para hoy
$fecha_fin = mktime();
// obtengo la diferencia timestamp entre ambas fechas
$diferencia = ($fecha_fin - $fecha_inicio);
// convierto a días la diferencia timestamp
$dias = $diferencia / (24 * 60 * 60); # días que pasaron entre dos fechas
// dinero ahorrado x día
$dinero = 2.75;
// obtengo el importe total ahorrado,
// multiplicando los días x el importe diario
$ahorro = $dias * $dinero;
// Imprimo el resultado
echo $ahorro;

?>