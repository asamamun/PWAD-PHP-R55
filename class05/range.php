<?php
require "fx.php";
var_dump(range("A","I"));
echo "<br>";
var_dump(range(0,100,2));
echo "<br>";
var_dump(range(1,100,2));
echo "<br>";
var_dump(count(range(5,15)));
echo AV(range(1,100,2));
$states = array("Ohio", "Florida", "Texas");
echo AV($states);
echo AV($_SERVER);
//multidimensional array
$customers = array();
$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");
// echo AV($customers);
foreach ($customers as $value) {
    echo AV($value);
}

if(in_array("Texas",$states)){
    echo "have";
}
else echo "no have";