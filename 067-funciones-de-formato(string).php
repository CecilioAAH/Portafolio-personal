<?php

/* La función nl2br($cadena) nos permite convertir saltos de
116
Programador PHP Experto Eugenia Bahit
línea en su representación HTML (<br />): */

$cadena = "Esto es
una cadena
de texto";
$resultado = nl2br($cadena);
echo $resultado;
/*
 salida:
 Esto es<br />
 una cadena <br />
 de texto
*/
$cadena = "Esto es\nuna cadena\nde texto";
$resultado = nl2br($cadena);
echo $resultado;
/*
 salida:
 Esto es<br />
 una cadena <br />
 de texto*/

 /* Podemos además, ajustar el ancho de caracteres de una
cadena de texto, utilizando la función wordwrap($cadena,
$ancho, $salto_de_linea, $no_cortar_palabras).  */

/* $ancho cantidad de caracteres
$salto_de_linea el carácter o patrón que se utilizará para
crear el salto de línea. Ejemplo: \n o <br/>.
$no_cortar_palabras si se establece en TRUE, PHP tendrá
cuidado de insertar el salto, sin cortar palabras.

        ejemplo*/

        $texto = "Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan
euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo
dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus
senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis
mutat affert percipit cu, eirmod consectetuer signiferumque eu per. In usu
latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus
placerat per.";
$formato = wordwrap($texto, 60, chr(10), True);
echo $formato; 


    /*
Lorem ipsum ad his scripta blandit partiendo, eum fastidii
accumsan euripidis in, eum liber hendrerit an. Qui ut wisi
vocibus suscipiantur, quo dicit ridens inciderint id. Quo
mundi lobortis reformidans eu, legimus senserit definiebas
an eos. Eu sit tincidunt incorrupte definitionem, vis mutat
affert percipit cu, eirmod consectetuer signiferumque eu
per. In usu latine equidem dolores. Quo no falli viris
intellegam, ut fugit veritus placerat per.
*/  

/* Podemos necesitar convertir toda una cadena a
minúsculas con strtolower($cadena), o solo convertir a
minúscula, el primer carácter de una cadena con
lcfirst($cadena): */

$usuario = "AnGgie";
echo strtolower($usuario); // anggie
echo lcfirst($usuario); // anGgie

/* Pero también podemos querer convertir toda una cadena a
mayúsculas con strtoupper($cadena), convertir solo el
primer carácter de la cadena ucfirst($cadena) o
convertir el primer carácter de cada palabra
ucwords($cadena): */

$cadena = "hola mundo";
echo strtoupper($cadena); // HOLA MUNDO
echo ucfirst($cadena); // Hola mundo
echo ucwords($cadena); // Hola Mundo

        //Un ejemplo práctico de conversión de mayúsculas y minúsculas:

$nombre_y_apellido = "Anggie Lopez";
$username = strtolower($nombre_y_apellido);
$nombre_visible = ucwords($username);

//Dar a una cadena, formato de moneda, es posible 
//mediante el uso de money_format($formato, $cadena):


    setlocale(LC_MONETARY, "es_ES.UTF-8");
$bruto = 178.45;
$iva = $bruto * 0.21;
$neto = $bruto * 1.21;
$bruto_txt = money_format('%(#4n', $bruto);
$iva_txt = money_format('%(#4n', $iva);
$neto_txt = money_format('%(#4n', $neto);
echo $bruto_txt . chr(10);
echo $iva_txt . chr(10);
echo $neto_txt . chr(10);
/*
 178,45 €
 37,47 €
 215,92 €


 

?>