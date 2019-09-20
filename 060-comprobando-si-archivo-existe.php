<?php

//ile_exists('archivo_o_directorio')
//utilizando el comando anterior podemos aplicarlo así 

// validando si un archivo existe
$archivo = 'ruta_a/mi_archivo.txt';
if(file_exists($archivo)) {
 echo "El archivo {$archivo} existe";
} else {
 echo "El archivo {$archivo} no pudo localizarse";
}
// ahora, verificando si un directorio existe
$directorio = 'ruta/a/mi/carpeta';
if(file_exists($directorio)) {
 echo "El directorio {$directorio} existe";
} else {
 echo "El directorio {$directorio} no pudo localizarse";
}



?>
