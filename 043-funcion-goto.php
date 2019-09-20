<?php
echo "Hola Mundo!";
goto mi_etiqueta;
echo "Esto no se mostrará, ya que goto lo saltará";
mi_etiqueta: 
echo chr(10) . "Esto sí será mostrado" . chr(10);

echo "Y esta también!" . chr(10);
?>