<?php

/* Hay tres funciones muy útiles que nos permiten manipular
subcadenas de texto dentro de una cadena.  */

/* La función substr($cadena, $inicio, $longitud) nos
retornará la longitud de la cadena desde el inicio indicado: */

$cadena = "Lorem ipsum ad his scripta blandit partiendo, eum fastidii
accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus
suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans
eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte
definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque
eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut
fugit veritus placerat per.";
$resumen = substr($cadena, 0, 100);
echo "{$resumen}[...]";
/*
Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis
in, eum liber hendreri[...]
*/

/* Con substr_count($cadena, $patron) podremos obtener la
cantidad de veces que el patrón es encontrado en la cadena: */

$cadena = "Lorem ipsum ad his scripta blandit partiendo, eum fastidii
accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus
suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans
eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte
definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque
eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut
fugit veritus placerat per.";
$patron = "ut";
$apariciones = substr_count($cadena, $patron);
echo $apariciones; // 3


/* Es posible también, reemplazar una subcadena dentro de una
cadena con substr_replace($cadena, $reemplazo,
$inicio, $longitud):
 */

$cadena = "Ayer recorrí las calles de Liniers con mi primo";
$patron = "las calles de Liniers";
$ini = stripos($cadena, $patron);
$nueva_cadena = substr_replace($cadena, "los alrededores de Belgrano",
 $ini, strlen($patron));
echo $nueva_cadena;
// Ayer recorrí los alrededores de Belgrano con mi primo


?>