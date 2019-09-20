<?php

//primera forma
$var_1 = 'Esta es una cadena de texto'; 


//segunda forma
$variable = <<<IDENTIFICADOR
contenido de heredoc
IDENTIFICADOR;

//otro ejemplo de segunda forma
$documento = <<<NOTA_SOBRE_HEREDOC
Es muy importante señalar que la línea con el identificador de cierre no debe
contener ningún caracter, excepto posiblemente un punto y coma (;). Esto
significa en particular que el identificador no debe usar sangría, y que no
deben existir ningún espacio ni tabulación antes o después del punto y coma.
Es muy importante darse cuenta que el primer caracter antes del identificador
de cierre debe ser un salto de línea definida por el sistema operativo local.
En los sistemas UNIX sería \n, al igual que en Mac OS X. El delimitador de
cierre (posiblemente seguido de un punto y coma) también debe ser seguido de
un salto de línea.
Si se rompe esta regla y el identificador de cierre no está "limpio", no será
considerado como un identificador de cierre, y PHP continuará buscando uno.
Si no se encuentra ningún identificador de cierre antes del final del
fichero, se producirá un error de análisis en la última línea.
NOTA_SOBRE_HEREDOC;


/* Se recomienda el uso de heredoc, para definir cadenas de
texto de grandes extensiones */

?>