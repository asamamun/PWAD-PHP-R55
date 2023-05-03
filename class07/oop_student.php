<?php
require "./class.student.php";
require "./studentArr.php";
foreach ($students as $k=>$v){
$s = new Student($k,$v);
echo $s->show();
}