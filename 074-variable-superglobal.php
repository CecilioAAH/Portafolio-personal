<?php

$metodo = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
foreach($_SERVER as $clave=>$valor) {
    echo "\$_SERVER['$clave'] = $valor<br/>";


/*     tambien se le puede llamar como variables predefinidas
 */



/* El foreach anterior, generará una salida similar a la siguiente
(se resaltan los keys más usuales):
$_SERVER['HTTP_HOST'] = localhost
$_SERVER['HTTP_CONNECTION'] = keep-alive
$_SERVER['HTTP_CACHE_CONTROL'] = max-age=0
$_SERVER['HTTP_USER_AGENT'] = Mozilla/5.0 (X11; Linux i686) AppleWebKit/535.11
(KHTML, like Gecko) Chrome/17.0.963.79 Safari/535.11
$_SERVER['HTTP_ACCEPT'] =
text/html,application/xhtml+xml,application/xml;q=0.9,/*;q=0.8
$_SERVER['HTTP_ACCEPT_ENCODING'] = gzip,deflate,sdch
$_SERVER['HTTP_ACCEPT_LANGUAGE'] = es-419,es;q=0.8
$_SERVER['HTTP_ACCEPT_CHARSET'] = ISO-8859-1,utf-8;q=0.7,*;q=0.3
$_SERVER['PATH'] = /usr/local/bin:/usr/bin:/bin
$_SERVER['SERVER_SIGNATURE'] =
$_SERVER['SERVER_SOFTWARE'] = Apache
$_SERVER['SERVER_NAME'] = localhost
$_SERVER['SERVER_ADDR'] = ::1
$_SERVER['SERVER_PORT'] = 80
$_SERVER['REMOTE_ADDR'] = ::1
$_SERVER['DOCUMENT_ROOT'] = /var/www
$_SERVER['SERVER_ADMIN'] = webmaster@localhost
$_SERVER['SCRIPT_FILENAME'] = /var/www/euge/file.php
$_SERVER['REMOTE_PORT'] = 47578
$_SERVER['GATEWAY_INTERFACE'] = CGI/1.1
$_SERVER['SERVER_PROTOCOL'] = HTTP/1.1
$_SERVER['REQUEST_METHOD'] = GET
$_SERVER['QUERY_STRING'] = parametro=valor
$_SERVER['REQUEST_URI'] = /euge/file.php?parametro=valor
$_SERVER['SCRIPT_NAME'] = /euge/file.php
$_SERVER['PHP_SELF'] = /euge/file.php
$_SERVER['REQUEST_TIME'] = 1331772401
 */
?>
