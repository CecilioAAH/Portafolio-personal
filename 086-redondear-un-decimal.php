<?php

/* Redondear un número con N
cantidad de decimales
round($numero, $decimales) */

$bruto = 1573.94;
$alicuota_iva = 10.5;
$iva = $bruto * $alicuota_iva / 100; // 165.2637
$iva = round($iva, 2); // 165.26

/* Redondear un número hacia
abajo
floor($numero) */

$bruto = 1573.94;
$alicuota_iva = 10.5;
$iva = $bruto * $alicuota_iva / 100; // 165.2637
$iva = floor($iva); // 165

/* Redondear un número hacia
arriba
ceil($numero)
 */

$bruto = 1573.94;
$alicuota_iva = 10.5;
$iva = $bruto * $alicuota_iva / 100; // 165.2637
$iva = ceil($iva); // 166


/* Obtener un número entero
aleatorio
rand($numero_minimo, $numero_maximo)
 */

$password = rand(199999, 999999); // 158035


?>