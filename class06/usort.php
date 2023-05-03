<?php
include "./studentArr.php";
include "./fx.php";
$dates = [
    '10-10-2011',
    '2-17-2010',
    '2-16-2011',
    '1-01-2013',
    '10-10-2012'
];
usort($dates,"year_sort");
function year_sort($first_val,$second_val){
    $year1 = explode("-", $first_val)[2];
    $year2 = explode("-", $second_val)[2];
    //descneding order
    if($year1 == $year2){ return 0; }
    elseif($year1 > $year2){ return -1; }
    else  return 1;
    //ascending order
/*     if($year1 == $year2){ return 0; }
    elseif($year1 > $year2){ return 1; }
    else  return -1; */
}
echo AV($dates);
