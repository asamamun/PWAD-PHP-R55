<?php
include "./students.php";
include "./fx.php";
$age = array_column($students,"age");
// $major = array_column($students,"major");
$student = array_keys($students);
$new = array_combine($student, $age);
// array_multisort($new,);
asort($new);
echo AV($new);
$newsort = [];
foreach($new as $k => $v){
    if(!array_key_exists($v,$newsort)){
        $newsort[$v] = [$k]; 
    }
    else{
        $newsort[$v][] = $k;
    }
}
// var_dump($newsort);
foreach ($newsort as $k=> &$value) {
    sort($value);
    // var_dump($newsort[$k] = $v);

}
//var_dump($newsort);
$mycustomsort = [];
foreach ($newsort as $key => $value) {
    foreach ($value as $k => $v) {
        if(!array_key_exists($v,$mycustomsort)){
            $mycustomsort[$v]=$key;
        }
    }    
}
echo AV($mycustomsort)
?>