<?php
class A{
    public function __construct()
    {
        echo "<h3>A called automatically</h3>";
    }
    public function __destruct(){
        echo "<h3>descruct called automatically</h3>";
        // $n = null;
    }
}
$o = new A();
//garbage collection