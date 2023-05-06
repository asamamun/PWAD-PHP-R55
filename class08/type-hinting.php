<?php

function sq(int $a):float{
return $a*$a;
}

try {
    echo sq(5);
} catch (\Throwable $th) {
    echo $th->getMessage();
}

