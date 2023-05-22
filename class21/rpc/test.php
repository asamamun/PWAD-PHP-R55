<h1>example: test.php?fx=name&value=value</h1>
<?php
function a($m){
    echo "Hello " . $m;
}
function sq($n){
    echo $n*$n;
}
function cube($n){
    echo $n*$n*$n;
}

if(isset($_GET['fx']) && isset($_GET['value'])){
    $_GET['fx']($_GET['value']);
    //cube(10)
}
echo "<hr>";
var_dump(get_defined_functions()['user']);