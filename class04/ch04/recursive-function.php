<?php
//create a recursive function
function add($n){
    if($n <= 0) return 0;
    return $n + add($n-1);
}
echo add(5);
// 5 + 4 + 3 + 2 + 1 + 0