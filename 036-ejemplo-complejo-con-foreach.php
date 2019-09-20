<?php

$datos_de_juan = array('Apellido' => 'Pérez',
'Fecha de nacimiento' => '23-11-1970',
'Teléfonos' => array('Casa' => '4310-9030',
 'Móvil' => '15 4017-2530',
 'Trabajo' => '4604-9000'),
'Casado' => True,
'Pasaporte' => False,
);
foreach($datos_de_juan as $titulo => $dato) {
 if(!is_array($dato)) {
 if($dato === True) {
 $dato = 'SI';
 } else if ($dato === False) {
 $dato = 'NO';
 }
 echo "{$titulo}: {$dato}" . chr(10);
 } else {
 foreach($dato as $tipo_telefono => $numero) {
 echo "Teléfono {$tipo_telefono}: {$numero}" . chr(10);
 }
 }
}
/* Apellido: Prez
Fecha de nacimiento: 23-11-1970
Teléfono Casa: 4310-9030
Teléfono Móvil: 15 4017-2530
Teléfono Trabajo: 4604-9000
Casado: SI
Pasaporte: NO
*/
?>