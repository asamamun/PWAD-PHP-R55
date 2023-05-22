<?php
include "./fx.php";
echo AV(hash_algos());
echo "<hr>";
echo "<h1>openssl_get_cipher_methods</h1>";
echo AV(openssl_get_cipher_methods());