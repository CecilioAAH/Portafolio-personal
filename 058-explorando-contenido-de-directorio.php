<?php

// abro el directorio
$dir = opendir('../taller-de-funciones');
// itero solo si readdir NO devuelve False
while(($elemento = readdir($dir)) !== False) {
 // imprimo el nombre del archivo o directorio
 echo $elemento . chr(10);
}
// cierro el directorio
closedir($dir);
/*
 Salida:

 index.php
 template.html
 funciones.php
 ..
 files
 .
*/



// para filtrar el tipo de elemento se debe diferenciar con las siguientes funciones

/* is_dir($elemento)
Nos indica si el elemento evaluado es un directorio (True)
o no (False)
is_file($elemento)
Nos indica si el elemento evaluado es un archivo (True) o
no (False).
is_link($elemento)
Nos indica si el elemento evaluado es un elace simbólico
(True) o no (False). */

//para windows... link es un acceso directo


/* filetype($elemento)
Nos retorna el tipo de elemento siendo los valores de
retorno posibles: fifo, char, dir, block, link,
file, socket y unknown.

*/


?>