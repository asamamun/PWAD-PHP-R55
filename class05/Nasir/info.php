<?php
include "./students.php";
include "./fx.php";
$age = array_column($students,"age");
// $major = array_column($students,"major");
$student = array_keys($students);
$new = array_combine($student, $age);
array_multisort($new);
echo AV($new);
?>