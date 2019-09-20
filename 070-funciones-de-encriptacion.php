<?php

//Podemos obtener el hash MD5 con la función md5($cadena):

$clave = "pepe_grillo-12_14";
$hash_clave = md5($clave);
echo $hash_clave; // 917f2e75f261ba6df7b36a80e1f38241


/* Los posibles algoritmos de cifrado, pueden obtenerse con
la función hash_algos() la cual retorna un array con todos los
algoritmos disponibles: */

print_r(hash_algos());
Array
(
 [0] => md2
 [1] => md4
 [2] => md5
 [3] => sha1
 [4] => sha224
 [5] => sha256 
 [6] => sha384
 [7] => sha512
 [8] => ripemd128
 [9] => ripemd160
 [10] => ripemd256
 [11] => ripemd320
 [12] => whirlpool
 [13] => tiger128,3
 [14] => tiger160,3
 [15] => tiger192,3
 [16] => tiger128,4
 [17] => tiger160,4
 [18] => tiger192,4
 [19] => snefru
 [20] => snefru256
 [21] => gost
 [22] => adler32
 [23] => crc32
 [24] => crc32b
 [25] => salsa10
 [26] => salsa20
 [27] => haval128,3
 [28] => haval160,3
 [29] => haval192,3
 [30] => haval224,3
 [31] => haval256,3
 [32] => haval128,4
 [33] => haval160,4
 [34] => haval192,4
 [35] => haval224,4
 [36] => haval256,4
 [37] => haval128,5
 [38] => haval160,5
 [39] => haval192,5
 [40] => haval224,5
 [41] => haval256,5 



 //ejemplo breve

 $clave = "tRxc6348-bR129";
$hashes = array();
foreach(hash_algos() as $hash) {
 $hash_clave = hash($hash, $clave);
 $hashes[$hash] = $hash_clave;
}

?>
