<?php

if(checkdate(12, 25, 2011) === True) {
    echo "Fecha válida";
   } else {
    echo "Fecha no válida";
   }


  /*  Podemos validar la veracidad de una fecha, mediante el uso de
la función checkdate($mes, $dia, $año) teniendo en cuenta
que retornará TRUE cuando se trate de una fecha válida, o
FALSE o en caso contrario: */


/* Es posible realizar cálculos sencillos con la fecha y hora,
combinando el uso de las funciones date() y time(): */



/* 
$hoy = date('Y-m-d');
$manana = date('Y-m-d', (time() + (1 * 24 * 60 * 60)));
$ayer = date('Y-m-d', (time() - (1 * 24 * 60 * 60)));
/*
 (1 * 24 * 60 * 60) equivale a:
 1 día
 24 horas
 60 minutos
 60 segundos
*/
//echo $ayer . chr(10) . $hoy . chr(10) . $manana . chr(10);
/*
2011-11-08 (ayer)
2011-11-09 (hoy)
2011-11-10 (mañana)
*/
?>