<?php
/*
-$a Negación Opuesto de $a.
$a + $b Adición Suma de $a y $b.
$a - $b Sustracción Diferencia de $a y $b.
$a * $b Multiplicación Producto de $a y $b.
$a / $b División Cociente de $a y $b.
$a % $b Módulo Resto de $a dividido por $b.
*/

#Haciendo cálculos con el IVA

$alicuota_iva = 21;
$codigo_de_producto = 1284;
$nombre_producto = "Agua Mineral Manantial x 500 ml";
$precio_bruto = 3.75;
$iva = 3.75 * 21 / 100;
$precio_neto = $precio_bruto + $iva;
?>
