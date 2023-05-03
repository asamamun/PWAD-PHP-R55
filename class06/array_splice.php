<?php
//CRUD operation can be performed with array_splice
include "./countryArr.php";
$states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Connecticut");
print_r(array_splice($states,3,0,"Noakhali"));
print_r($states);