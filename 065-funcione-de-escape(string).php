<?php

/* addslashes($cadena) escapa una cadena de texto añadiendo
barras invertidas a las comillas dobles, siemples, barras
invertidas y bytes nulos.
escapar cadenas de texto que deban insertarse en bases de
datos, y hayan sido recibidas mediante HTTP POST.


quotemeta($cadena) escapa una cadena de texto añadiendo
barras invertidas a los siguientes caracteres: . \ + * ? [ ^ ]
( $ ) */

$doc = "Si se realiza el cálculo (15*2)+[(12+5)*(4.3+0.45)] obtendremos el
importe en $";
$doc = quotemeta($doc);
echo $doc;
        /*
      salida:
       Si se realiza el clculo \(15\*2\)\+\[\(12\+5\)\*\(4\.3\+0\.45\)\] obtendremos
       el importe en \$
      */

/* De forma inversa a lo anterior, pueden eliminarse las barras
invertidas de una cadena espada, mediante
stripslashes($cadena) */

$doc = "Si se realiza el cálculo (15*2)+[(12+5)*(4.3+0.45)] obtendremos el
importe en $";
$doc = quotemeta($doc); 

echo $doc;
    /*
    Salida:
    Si se realiza el clculo \(15\*2\)\+\[\(12\+5\)\*\(4\.3\+0\.45\)\] obtendremos
    el importe en \$
    */
echo stripslashes($doc);
    /*
    Salida:
    Si se realiza el cálculo (15*2)+[(12+5)*(4.3+0.45)] obtendremos el importe en
    $
    */




?>