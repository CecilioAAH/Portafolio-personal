<?php
$producto = "Coca-Cola x 1,5 Lts.";
echo isset($producto);
# retorna True
$producto = "";
echo isset($producto);
# Retorna True
$producto = NULL;
echo isset($producto);
# retorna False
unset($producto);
echo isset($producto);
# retorna False


/*¿NULL o unset()? ¿Cuál de los dos usar?
Cuando una variable ya no es necesaria, debe priorizarse el
uso de unset sobre NULL, ya que con unset(), se libera la
dirección de la memoria en la cual había sido escrita dicha
variable.*/
?>
