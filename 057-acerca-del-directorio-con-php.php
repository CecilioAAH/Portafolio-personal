<?php

/* no existe una
función llamada dopen, ya que PHP, no tiene estandarizado el
estilo para nombres de funciones. A diferencia de lo que
esperamos, para abrir un directorio, la función que debemos
utilizar, se denomina opendir. */

$recurso = opendir('nombre_del_directorio');

/* Como nombre de directorio, es posible utilizar también,
cualquier ruta absoluta: */

$recurso = opendir('/var/www/dominio.com/public_html/archivos/pdf');

/* o una ruta relativa: */

$recurso = opendir('../archivos/pdf');
$otro_recurso = opendir('archivos/pdf');

/* Al igual que cuando abrimos un archivo, cuando abrimos un
directorio, es necesario cerrarlo para liberarlo de memoria: */

closedir($recurso);



?>