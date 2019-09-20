<?php

//in_array($valor, $array)


if(in_array(50, $puntaje)) {
    echo 'Usted ha obtenido el máximo puntaje posible en una respuesta';
   }
   

  /*  Buscar un valor detrminado en un array y
obtener su clave correspondiente
array_search($valor, $array) */

$personas = array('Juan', 'Ana', 'Emilse', 'Diego');
$persona_buscada = 'Emilse';
$resultado = array_search($persona_buscada, $personas);
var_dump($resultado); // int(3)



?>