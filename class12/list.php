<?php
list($a,$b,$c,$d)=["red","blue","green","yellow","yellowgreen","yellowyellow"];
echo $d;

$foo = array(2 => 'a', 'foo' => 'b', 0 => 'c');
$foo[1] = 'd';
list($x, $y, $z) = $foo;
var_dump($x, $y, $z);