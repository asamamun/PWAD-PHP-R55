<?php
class A{
    const BR = "<br>";
    public $x="i am x";
    private $y="i am y";
    protected $z = "i am z";
    public function p(){ echo "<h3>I am public p. I can access private {$this->y} and protected {$this->z} properties</h3>";}
    private function q(){ echo "<h3>I am private q</h3>";}
    protected function r(){ echo "<h3>I am protected r</h3>";}
}
$o = new A();
echo $o->x;
echo A::BR;
echo $o->p();

/* $o->y;
$o->z; */
echo A::BR;
class B extends A{
    //private method cannot be accessed from child class but protected methods are accessible from the child class 
// public function test1(){
//     $this->q();
// }
public function test2(){
    $this->r();
}
}
$ob = new B();
echo $ob->x;
echo $ob->test2();
// echo $ob->y;
// echo $ob->z;
