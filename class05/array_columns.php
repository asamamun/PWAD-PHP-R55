<?php
include "./studentArr.php";
include "./fx.php";
$gpa = array_column($students,"gpa");
$keys = array_keys($students);
echo AV($keys);
echo AV($gpa);
$newArr = array_combine($keys,$gpa);
echo AV($newArr);
