<?php

$dir = opendir('../taller-de-funciones');
$archivos = array();
$directorios = array();
$symlinks = array();
while(($elemento = readdir($dir)) !== False) {
 if($elemento != "." and $elemento != "..") {
 $path_elemento = "../taller-de-funciones/{$elemento}";
 if(is_dir($path_elemento)) {
 $directorios[] = $elemento;
 } elseif(is_file($path_elemento)) {
 $archivos[] = $elemento;
 } elseif(is_link($path_elemento)) {
 $symlinks[] = $elemento;
 }
 }
}
closedir($dir);
$contenido = array('Directorios' => $directorios,
 'Archivos' => $archivos,
 'Enlaces simbólicos' => $symlinks);
print_r($contenido);



/*  salida :    
eugenia@cocochito:~/borradores$ php -f file.php
Array
( [Directorios] => Array
 (
 [0] => files
 )
 [Archivos] => Array
 (
 [0] => index.php
 [1] => template.html
 [2] => funciones.php
 )
 [Enlaces simbólicos] => Array
 (
 )
) 


?>