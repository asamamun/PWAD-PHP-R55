<?php
function sq($n){
    if(!is_int($n)) throw new Exception('Invalid number');
    return $n*$n;
}

try {
    echo sq(5) . "<hr>";
    if(5==5){
        throw new Exception("this is my error message", 1);
    }
    else{
        throw new Exception("this is my another error message", 1);
    }    
} catch (\Throwable $th) {
    echo $th->getMessage();
}
finally{
    
}