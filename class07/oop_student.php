<?php
require "./class.student.php";
require "./studentArr.php";
$allcustomers = file("customers-1000.txt");
foreach ($students as $k=>$v){
$s = new Student($k,$v);
echo $s->show();
}