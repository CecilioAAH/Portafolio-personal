<?php

/* ¿En qué fecha nació...?
Problema:
Luciana tiene hoy, 15 años ¿En qué fecha pudo haber nacido
Luciana? */


// edad actual de Luciana en años
$edad = 15;
// probable año de nacimiento de luciana
$anio = (int)date('Y') - $edad;
// probable fecha de nacimiento más antigua
$probable_mas_antigua = date('d/m/') . ($anio-1);
// probable fecha de nacimiento más reciente
$probable_mas_reciente = date('d/m/') . $anio;
echo <<<EOT
Luciana tiene que haber nacido después del $probable_mas_antigua y antes o durante el $probable_mas_reciente .
EOT;


?>