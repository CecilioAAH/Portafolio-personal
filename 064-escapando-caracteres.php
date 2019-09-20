<?php

$var = "Las comillas dobles (\") deben escaparse";

/* 
Algunos caracteres de escape pueden representarse como se
muestra:


\n avance de línea (LF o 0x0A (10) en ASCII)
\r retorno de carro (CR o 0x0D (13) en ASCII)
\t tabulador horizontal (HT o 0x09 (9) en ASCII)
\v tabulador vertical (VT o 0x0B (11) en ASCII) (desde PHP 5.2.5)
\e escape (ESC o 0x1B (27) en ASCII) (desde PHP 5.4.0)
\f avance de página (FF o 0x0C (12) en ASCII) (desde PHP 5.2.5)
\\ barra invertida
\$ signo del dólar
\" comillas dobles
\' Comilla simple 

*/

//otro ejemplo
$a = "Hola Mundo";
$b = "Yo digo \{$a}";
echo $b; // salida: Yo digo {Hola Mundo}

?>