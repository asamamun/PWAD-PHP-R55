<?php
//class is a template/theme from which object is created
class Student{
    //property
    public $roll;
    public $name;
    public $classname;
    public $section;
    //method
    public function info(){
        echo "<fieldset>";
        echo "<strong>Roll : ". $this->roll."</strong><br>";
        echo "<strong>Name : ". $this->name."</strong><br>";
        echo "<strong>Class : ". $this->classname."</strong><br>";
        echo "<strong>Section : ". $this->section."</strong>";
        echo "</fieldset><hr>";
    }
}
//object is the instance/example of a class
$nasir = new Student();
$nasir -> name = "Nasir Hossain";
$nasir -> roll = "101";
$nasir -> classname = "IDB BISEW";
$nasir -> section = "PWAD";
$nasir->info();

$su = new Student();
$su->name = "ABC";
$su->roll  = "102";
$su->info();
?>