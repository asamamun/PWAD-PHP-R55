<?php
class Student{
    //public property can be accessed from anywhere
    public $name;
    //private property can be accessed from only within the class
    private $age = 0;
    //protected property can be accessed from within the class and its child class
    protected $dob;
    //setter or mutator
    public function setAge($n){
        $this->age = $n;
    }
    //getter or accessor
    public function getAge(){
        return $this->age;
    }
    //setter or mutator
    public function setDob($n){
        $this->dob = $n ;
    }
     //getter or accessor
    public function getDob(){
        return $this->dob;
    }
}

try {
    $a = new Student;
//set value
$a->name = "Md ABC";
//get value
echo $a->name . "<br>";

/* $a->age = 23;
echo $a->age . "<br>";
$a->age = 23;
echo $a->age . "<br>";
*/
$a->dob = 23;
echo $a->dob . "<br>";
$a->setAge(25);
echo $a->getAge() . "<br>";
$a->setDob("2000-01-01");
echo $a->getDob() . "<br>";
} catch (\Throwable $th) {
    // var_dump($th);
    echo $th->getMessage() . "on line ". $th->getLine();
}

echo "<hr>i am the last line";
