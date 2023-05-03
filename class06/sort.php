<?php
include "./countryArr.php";
include "./fx.php";
include "./studentArr.php";
$rev = array_reverse($countryList);
echo AV($rev);
?>
<hr>
<?php
echo AV(array_flip($countryList));
?>
<hr>
<?php
// sort($countryList);
// echo AV($countryList);
?>
<hr>
<?php
//keys are rearranged in numeric order
$grades = array("42", "98", "100", "100", "43", "12");
// sort($grades);
// echo AV($grades,SORT_NATURAL);
?>
<hr>
<?php
// asort($countryList);
// echo AV($countryList);
// asort($grades);
// echo AV($grades);
// rsort($grades);
arsort($grades);
echo AV($grades);
?>
<h3>Natural Sort</h3>
<?php
$pic = ["picture1.jpg","Picture2.jpg", "picture10.jpg",  "picture20.jp"];
natcasesort($pic);
echo AV($pic);
?>
<h3>Key Sort</h3>
<?php
ksort($students);
var_dump($students);





