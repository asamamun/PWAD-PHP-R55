<?php
//constant
define("IDB","Islamic Development Bank");
$i = 1;
function a($n){
    //style 1
    global $i;
    echo $i;
    //style 2
    // $ii=$GLOBALS['i'];
    // echo $ii;
    return "returning".$n;
}

a(5);
?>
<hr>
<?php
print_r($_ENV);
?>
<hr>
<?php
echo $_ENV['HOSTNAME'];
?>
<hr>
<?php
echo IDB;
