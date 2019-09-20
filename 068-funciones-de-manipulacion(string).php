<?php

/* Funciones de manipulación

Muchas veces, puede ser muy útil, manipular una cadena de
texto, de forma tal, que nos permite operar con diferentes
datos. Por ejemplo, es posible dividir una cadena de texto,
tomando como punto de división, un caracter o patrón,
mediante la función explode($delimitador, $cadena) y así
obtener un array con las fracciones de cadena divididas, que
nos permita iterar sobre cada una: */


$contactos = "Juan Antonio Avila <avila@mail.com>,
Rodrigo Mancusso <rmancu@mail.com>,
Silvina D'laggio <dlaggio@mail.com>
";
$patron = "," . chr(10);
$personas = explode($patron, $contactos);
foreach($personas as $persona) {
 echo $persona . chr(10);
}
/*
Juan Antonio Avila <avila@mail.com>
Rodrigo Mancusso <rmancu@mail.com>
Silvina D'laggio <dlaggio@mail.com>
*/

//Podemos contar la cantidad de caracteres de una cadena
//de texto, mediante la función strlen($cadena):

$mensaje = "Lorem ipsum ad his scripta blandit partiendo, eum fastidii
accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus
suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans
eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte
definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque
eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut
fugit veritus placerat per. Ius id vidit volumus mandamus, vide veritus
democritum te nec, ei eos debet libris consulatu. No mei ferri graeco dicunt,
ad cum veri accommodare. Sed at malis omnesque delicata, usu et iusto zzril
meliore. Dicunt maiorum eloquentiam cum cu, sit summo dolor essent te. Ne
quodsi nusquam legendos has, ea dicit voluptua eloquentiam pro, ad sit";
$caracteres = strlen($mensaje);
if($caracteres > 140) {
 echo "Tu mensaje es demasiado largo. Solo se admiten 140 caracteres.";
}

//Contar la cantidad de palabras en una cadena de texto, e
//incluso, iterar sobre cada palabra, puede ser algo realmente
//útil. La función str_word_count($cadena, $formato) nos
//ayudará a hacerlo:

$nombre_y_apellido = "Juan P.";
$datos = str_word_count($nombre_y_apellido, 1);
if(count($datos) < 2) {
 echo "{$nombre_y_apellido} no es un nombre y apellido válido";
} else {
 foreach($datos as $dato) {
 if(strlen($dato) < 2) {
 echo "Por favor, no utilices iniciales.";
 }
 }
}

// Otra función que podremos utilizar muy a menudo, es
// str_replace($busqueda, $reemplazo, $cadena) que nos
// permite buscar un determinado carácter o patrón y
// reemplazarlo por el indicado:

$email = "juanperez@dominio.com";
$mail_no_spam = str_replace("@", " [AT] ", $email);
echo $mail_no_spam; // juanperez [AT] dominio.com 

// Esta función, admite como parámetros de búsqueda y
// reemplazo, tanto cadenas de texto, como matrices:

$email = "juanperez@dominio.com";
$busqueda = array("@", ".");
$reemplazo = array(" [AT] ", " [DOT] ");
$mail_no_spam = str_replace($busqueda, $reemplazo, $email);
echo $mail_no_spam; // juanperez [AT] dominio [DOT] com

// Incluso, permite reemplazar todos los elementos de un array de
// búzqueda, por un único carácter o patrón de reemplazo (muy
//útil para eliminar espacios en blanco en una cadena, como en
// el siguiente ejemplo):

$username = " alejo val3nt1n0 ";
$busqueda = array(" ", "\t", "\n", "\r", "\0", "\x0B");
$username = str_replace($busqueda, '', $username);
echo $username; // alejoval3nt1n0

/* Es posible también, realizar reemplazos, haciendo que la
búsqueda sea insensible a mayúsculas y minúsculas. Para ello,
debemos utilizar la función str_ireplace($busqueda,
$reemplazo, $cadena) de la misma forma que lo haríamos
con str_replace().
 */

// Otra función sumamente útil, es strpos($cadena,
// $patron_de_busqueda), la cual nos retornará la posición en
// la que se encuentra el patrón buscado, dentro de la
// cedana:

$email = "juanperez@mail.com";
$patron = "@";
$posicion = strpos($email, $patron);
echo $posicion; // 9

//Si se desea que la búsqueda sea insensible a mayúsculas y
//minúsculas, deberá utilizarse stripos($cadena, $patron).

$var1 = "Hola Mundo";
$var2 = "adios mundo";
$patron = "hola"; 

if(stripos($var1, $patron) === 0) {
    echo "Está al comienzo de la cadena" . chr(10);
   }
   # INCORRECTO
   if(stripos($var2, $patron) == 0) {
    echo "Está al comienzo de la cadena" . chr(10);
   }
   if(stripos($var2, $patron) === False) {
    echo "No se encontró" . chr(10);
   }



?>