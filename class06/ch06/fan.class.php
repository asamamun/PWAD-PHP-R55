<?php
class Fan{
    public $name;
    public $type;
    public $blade;
    public $color;
    public $status = "off";
    public $light = "off";
    public $speed = "1";
    public function switch_on(){
        $this->status = "on";
    }
    public function switch_off(){
        $this->status = "off";
    }
    public function light_on(){
        $this->light = "on";
    }
    public function light_off(){
        $this->light = "off";
    }
    public function increaseSpeed(){
        $this->speed++;
    }
    public function decreseSpeed(){
        $this->speed--;
    }
    public function getSpeed(){
        return $this->speed;
    }
}


$ceilingfan = new Fan();
$ceilingfan->increaseSpeed();
$ceilingfan->increaseSpeed();
echo $ceilingfan->getSpeed();

