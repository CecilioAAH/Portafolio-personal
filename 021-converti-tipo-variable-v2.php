<?php
$a = "33 manzanas";
$b = 10;
settype($a, "integer");
echo $a + $b;
# salida: 43

/*AVISO:
No confíes en settype() para efectuar operaciones
aritméticas. Es preferible evitar su uso para estos casos. */
?>
