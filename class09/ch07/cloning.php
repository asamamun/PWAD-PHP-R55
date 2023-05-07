<?php
$a = 5;
$b= $a;//copy
$b = 6;
echo $a;
class A{
    public $x = 5;
    function __clone()
    {
        echo "i am called bcs i've been cloned";
    }
}
$o = new A();
$o2 = clone $o;//reference
$o2->x = 10;
echo $o->x;