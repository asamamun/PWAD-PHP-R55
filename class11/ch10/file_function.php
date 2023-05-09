<?php
include "./fx.php";
$l = "http://localhost/R55/PWAD-PHP-R55/class11/ch10/countryArr.php";
echo "original name: ". $l. "<br>";
echo "basename: ". basename($l). "<br>";
echo "dirname: ". dirname($l). "<br>";
echo "dirname: ". __DIR__. "<br>";
echo "filename: ". __FILE__. "<br>";
$info = pathinfo(__FILE__);
echo AV($info);
echo realpath("countryArr.php"). "<br>";
echo "filesize: ". filesize(__FILE__). "<br>";
echo "filesize: ". filesize($l). "<br>";//not allowed
echo "filesize: ". filesize("F:/php part 1.zip")/(1024*1024). "<br>";

