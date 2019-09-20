<?php
include("http://www.miweb.com/archivo.php?foo=bar");
include_once("http://www.miweb.com/archivo.php");
require("http://www.miweb.com/archivo.html");
require_once("http://www.miweb.com/archivo.txt");




// Si bien las funciones require() e include() de PHP realizan una
// acción similar (importar un archivo), no son iguales.
// include() intenta importar al archivo indicado y en caso de no
// poder hacerlo, arroja un error y continúa ejecutando el resto
// del script.
// Sin embargo, la función require(), cuando no logra importar el
// archivo indicado, arroja un error y finaliza sin permitir que el
// resto del script continúe ejecutándose.

?>

