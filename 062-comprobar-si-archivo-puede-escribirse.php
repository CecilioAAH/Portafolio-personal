<?php

//is_writable('archivo_o_directorio')
// con el comando anterior se puede aplicar así 


// validando si un archivo puede escribirse
$archivo = 'ruta_a/mi_archivo.txt';
if(is_writable($archivo)) {
 echo "El archivo {$archivo} puede ser escrito";
} else {
 echo "El archivo {$archivo} no puede ser escrito";
}
// ahora, verificando si un directorio puede escribirse
$directorio = 'ruta/a/mi/carpeta';
if(is_writable($directorio)) {
 echo "El directorio {$directorio} puede ser escrito";
} else {
 echo "El directorio {$directorio} no puede ser escrito";
}



?>