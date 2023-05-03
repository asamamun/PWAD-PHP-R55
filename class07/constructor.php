<?php
class SQ{
    //constructor called when object is instantiated
    //constructor can take parameters
    public function __construct($n)
    {
        echo "i am called with {$n} <br>";
    }
}

$o = new SQ(5);
$p = new SQ(6);
$q = new SQ(7);