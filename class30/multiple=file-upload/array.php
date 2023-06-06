<?php
$students = array(
    array(
        'name' => 'John Doe',
        'age' => 20,
        'grades' => array(80, 75, 90)
    ),
    array(
        'name' => 'Jane Smith',
        'age' => 22,
        'grades' => array(85, 90, 95)
    ),
    array(
        'name' => 'David Johnson',
        'age' => 21,
        'grades' => array(70, 80, 75)
    )
);
echo $students[0]['grades'][2];
echo "<br>";
echo $students[1]['age'];