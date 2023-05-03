<?php
class Employee
{
 private $name="no name";
 public $title="not set yet";
 public function getName() {
 return $this->name;
 }
 public function setName($n) {
 $this->name = $n;
 }
 public function sayHello() {
 echo "Hi, my name is {$this->name}. And I am {$this->title} of this company<hr>";
 }
}