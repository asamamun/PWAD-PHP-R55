<h3>Static properties and methods</h3>
<p>
Static properties and methods can be used without creating an instance of the class. The static keyword is also used to declare variables in a function which keep their value after the function has ended.
</p>
<hr>
<?php
//Static properties and methods can be used without creating an instance of the class. The static keyword is also used to declare variables in a function which keep their value after the function has ended.
class MyProduct{
    public static $progress=0;

    public function setProgress($n){
        self::$progress = self::$progress + $n;
    }
    public static function addProgress($n){
        self::$progress = self::$progress + $n;
    }
    public function getProgress(){
        return self::$progress;
    }
}
/* $a = new MyProduct();
$a->setProgress(15);
$b = new MyProduct();
$b->setProgress(15);
$c = new MyProduct();
$c->setProgress(15);
echo $a->getProgress(); */
echo "<br>";
//static class members can be accessed directly without creating objects
echo MyProduct::$progress;
echo "<br>";
MyProduct::addProgress(40);
echo MyProduct::$progress;
echo "<br>";
