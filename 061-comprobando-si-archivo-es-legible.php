<?php

//is_readable('archivo_o_directorio')
//con el comando anterior podemos aplicarlo ...

// validando si un archivo es legibe
$archivo = 'ruta_a/mi_archivo.txt';
if(is_readable($archivo)) {
 echo "El archivo {$archivo} puede ser leído";
} else {
 echo "El archivo {$archivo} no puede ser leído";
}
// ahora, verificando si un directorio es legible
$directorio = 'ruta/a/mi/carpeta';
if(is_readable($directorio)) {
 echo "El directorio {$directorio} puede ser leído";
} else {
 echo "El directorio {$directorio} no puede ser leído";
}


?>