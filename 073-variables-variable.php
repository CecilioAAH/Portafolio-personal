<?php
$nombre_de_variable = 'precio';
$$nombre_de_variable = 25.78;
echo $nombre_de_variable; // imprime precio
echo $$nombre_de_variable; // imprime 25.78


/* otro ejemplo podría ser 
$a = "mi_variable";
$$a = 75;
echo "El nombre de \$\$a es \${$a}";
// salida: El nombre de $$a es $mi_variable */


?>