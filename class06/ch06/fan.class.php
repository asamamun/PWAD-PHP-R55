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

// extends
class Turbine extends Fan{
    public function generate_power(){

    }
}

$ceilingfan = new Fan();
$ceilingfan->type = "Ceiling Fan";
$ceilingfan->increaseSpeed();
$ceilingfan->increaseSpeed();
$ceilingfan->decreseSpeed();
echo $ceilingfan->getSpeed();

$tf = new Fan();
$tf->type = "Table Fan";

$gasturbine = new Turbine();
$gasturbine->type = "Gas";
$gasturbine->name = "";
$gasturbine->switch_on();

$ram = new Turbine();
$ram->type = "Coal";
$ram->name = "Rampal Power Plant";
$ram->switch_on();


