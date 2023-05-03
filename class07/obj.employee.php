<?php
require "./class.employee.php";
$e1 = new Employee;
$e1->setName("Reza");
// $e1->name = "Reza";
$e1->title = "Manager";
$e1->sayHello();
$e2 = new Employee;
$e2->setName("Sadia");
$e2->title = "Center Manager";
$e2->sayHello();