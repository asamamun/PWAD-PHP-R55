<?php

function myautoload($class){
    require_once("$class.class.php");
}
spl_autoload_register('myautoload');

$a = new A();
$a->write();
$p = new Product();
$p->savemessage();
$i = new Image();
$i->savemessage();