<?php
$numero_dia = date('N');
/*
la función nativa date() de PHP, permite dar formato a la fecha local
N, retorna un número de 1 a 7, que representa el número de día de la
semana, siendo 1 Lunes y 7 domingo. */
$nombre_dia = '';
switch ($numero_dia) {
 case 1:
 $nombre_dia = "Lunes";
 break;
 case 2:
 $nombre_dia = "Martes";
 break;
 case 3:
 $nombre_dia = "Miércoles";
 break;
 case 4:
 $nombre_dia = "Jueves";
 break;
 case 5:
 $nombre_dia = "Viernes";
 break;
 case 6:
 $nombre_dia = "Sábado";
 break;
 case 7:
 $nombre_dia = "Domingo";
 break;
 default:
 $nombre = "No sabemos que día es";

/*
switch ($variable) {
 case "posible valor 1":
 // algoritmo a ejecutar si $variable == "posible valor 1"
 break;
 case "posible valor 3":
 // algoritmo a ejecutar si $variable == "posible valor 3"
 break;
 default:
 // algoritmo a ejecutar si valor no ha sido contemplado en
 // ningúno de los «case» anteriores
}
*/



?>