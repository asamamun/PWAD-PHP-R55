<?php
//sort array based on string length
$s = [
    "world is not enough",
    "abc",
    "hello",
    "nice",
    "good morning"
];
/* //solution 1
usort($s, function($a, $b) {
    return strlen($b) - strlen($a);
});
print_r($s); 
//In this code, the usort() function is used to sort the array $s. The comparison function function($a, $b) calculates the difference in string lengths between two elements $a and $b. By returning this difference, the usort() function sorts the array in ascending order based on string length. The resulting sorted array is then printed using print_r().
*/
//solution 2
array_multisort(array_map('strlen', $s), $s);
print_r($s);
// In this code, array_map('strlen', $s) is used to create an array of string lengths corresponding to the elements of the array $s. array_multisort() is then used to sort both arrays simultaneously. The resulting sorted array $s is then printed using print_r().