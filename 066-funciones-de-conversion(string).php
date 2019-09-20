<?php

/* htmlentities($cadena) convierte los caracteres aplicables a
entidades HTML.
Esta función debe utilizarse siempre
que una cadena de texto deba ser
impresa en un documento HTML y se
desconozca su contenido, para
prevenir que código fuente no deseado,
sea ejecutado */

$cadena = "Las negritas se escriben entre los tags <b> y </b> mientras que el
salto de linea se representa con <br/>";
$cadena = htmlentities($cadena);
echo $cadena;
    /*
    Las negritas se escriben entre los tags &lt;b&gt; y &lt;/b&gt; mientras que
    el salto de linea se representa con &lt;br/&gt;
    */      

//Su opuesto es html_entity_decode($cadena)


$cadena = "Las negritas se escriben entre los tags &lt;b&gt; y &lt;/b&gt;
mientras que el salto de linea se representa con &lt;br/&gt;";
$cadena = html_entity_decode($cadena);
echo $cadena;
    /*
    Las negritas se escriben entre los tags <b> y </b> 
    mientras que el salto de linea se representa con <br/>
    */

/* Evitando ejecución de código no deseado

Una función que deberá utilizarse toda vez que quiera evitarse
la ejecución de código PHP y HTML no deseado, es
strip_tags($cadena, $caracteres_permitidos). Esta
función eliminará todas las etiquetas PHP y HTML
exceptuando aquellas que se indiquen como caracteres
permitidos: */

$caracteres_permitidos = "<b>";
$cadena = "<p>Hola <b>Mundo</b></p><script
language='javascript'>alert('hola');</script>
<?php
echo $caracteres_permitidos;
?>";
$resultado = strip_tags($cadena, $caracteres_permitidos);
echo $resultado;
    // salida: Hola <b>Mundo</b>alert('hola');

    /* Eliminar espacios en blanco, también es posible.
    Disponemos de tres funciones predefinidas:
    ltrim($cadena): Elimina los espacios en blanco del inicio de la
    cadena
    rtrim($cadena): los elimina del final de la cadena
    trim(cadena): los elimina del inicio y final de la cadena */


?>