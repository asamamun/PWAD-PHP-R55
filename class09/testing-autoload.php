<?php

function myautoload($class){
    require_once("autoload/$class.class.php");
}
spl_autoload_register('myautoload');
$obj1 = new Image();
echo $obj1->save();
echo "<br>";
$obj2 = new Product();
echo $obj2->hello();
