<?php
//AV is Array Values
function AV(array $a){
    $h = "<ul>";
    foreach ($a as $k => $v) {
        // $h = $h .  "<li>{$k} = {$v}</li>";
        $h .= "<li>{$k} = {$v}</li>";
    }
    $h .= "</ul>";
    return $h;
}