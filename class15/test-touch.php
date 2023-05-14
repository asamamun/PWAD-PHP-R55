<?php
$f = "test-touch.txt";
echo "Filectime : " . date("Y-m-d H:i:s a",filectime($f)) . "<br>";
echo "Filemtime : " . date("Y-m-d H:i:s a",filemtime($f)) . "<br>";
echo "Fileatime : " . date("Y-m-d H:i:s a",fileatime($f)) . "<br>";

touch($f);