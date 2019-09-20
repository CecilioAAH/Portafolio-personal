<?php

/* Cuando decimos callable nos
referimos a si la función existe y
además, puede ser llamada */


function funcion_callable() {
    echo "Llamada correcta";
   }
   function llamar_a_funcion_callable($funcion) {
    if(is_callable($funcion)) {
    call_user_func($funcion);
    } else {
    echo "La función no es callable";
    }
   }
   llamar_a_funcion_callable('funcion_callable');
   // salida: Llamada correcta
   llamar_a_funcion_callable('funcion_inexistente');
   // salida: La función no es calleable
?>