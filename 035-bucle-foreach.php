<?php

/* 
ejemplo de como se utiliza un bucle foreach ...
    foreach($array as $valor_del_elemento) {
    algoritmo a realizar con cada uno de los elementos
   } */

   $nombres_propios = array('Ana', 'Julia', 'Luisa', 'Alberto', 'Cecilia',
'Carlos',);
foreach($nombres_propios as $nombre) {
 echo $nombre . chr(10);
}
/*
Salida:
Ana
Julia
Luisa
Alberto
Cecilia
Carlos
*/

?>