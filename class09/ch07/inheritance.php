<?php
class Automobile{
    public function __construct()
    {
        echo "i am called from parent";
    }
    function engine_start(){}
    function engine_stop(){}
    function hit_break(){}
    function left_indicator(){}
    function right_indicator(){}

}
class Bike extends Automobile{
    public function __construct()
    {        
        echo "i am called from bike";
        parent::__construct();
    }
}
class Truck extends Automobile{}
class Car extends Automobile{}

$fzr = new Bike();