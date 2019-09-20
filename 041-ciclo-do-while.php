<?php

/*funcionamiento de ciclo do while
do {
 algoritmo a ejecutarse al principio de la iteración
 y toda vez que expresión sea verdadera

} while ($expresion);

*/

$years = array();
$year = 1990;
do {
 $years[] = $year;
 $year++;
} while ($year < 1990);
print_r($years);
/*
Array
(
 [0] => 1990
)
*/
print $year;
// 1991


/* pseudocodigo


hacer {
 esto, la primera y vez y luego hacerlo...
} mientras que (esta condición se cumpla);

*/

?>