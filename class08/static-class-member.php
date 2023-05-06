<?php
class MyProduct{
    public $progress=0;
    public function setProgress($n){
        self::$progress = self::$progress + $n;
    }
    public function getProgress(){
        return self::$progress;
    }
}
$a = new MyProduct();
$a->setProgress(15);
$b = new MyProduct();
$b->setProgress(15);
$c = new MyProduct();
$c->setProgress(15);

echo $a->getProgress();
