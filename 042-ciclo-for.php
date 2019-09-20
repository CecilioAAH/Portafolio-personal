<?php

/* funcionamiento del for

for (expresion1; expresion2; expresion3) {
 // algoritmo que se ejecuta cuando expresion2 es verdadera
}

*/

for ($i = 1, $prefijo = "Codigo Nº 000"; $i <= 4; $sufijo = chr(10), $i++) {
 echo "{$prefijo}{$i}{$sufijo}";
}
/*
Codigo Nº 0001
Codigo Nº 0002
Codigo Nº 0003
Codigo Nº 0004
*/

?>