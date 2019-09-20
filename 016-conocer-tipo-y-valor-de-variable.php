<?php
$producto = "Coca-Cola x 1,5 Lts.";
var_dump($producto);
# salida: string(20) "Coca-Cola x 1,5 Lts."
$producto = "";
var_dump($producto);
# salida: string(0) ""
$producto = NULL;
var_dump($producto);
# salida: NULL
unset($producto);
var_dump($producto);
/*
 Generará un error, ya que la variable $producto ha sido destruida
 Salida:
 PHP Notice: Undefined variable: producto ...
 NULL
*/
?>
