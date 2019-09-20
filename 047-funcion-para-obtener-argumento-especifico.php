<?php



/* Puede ser muy util además, obtener un argumento
determinado. Para ello, disponemos de la función
func_get_arg(index), donde index, será el número de índice
del argumento en la matriz: */


function foo3() {
    echo func_get_arg(1);
    // salida: otro argumento
   }
   foo3('argumento 1', 'otro argumento');
?>