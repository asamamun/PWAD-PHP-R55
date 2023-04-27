<?php
$p = "IDB";
echo "TSP Name:$p";//double quote can parse variables
echo "<hr>";
echo "TSP Name:".$p;//double quote can parse variables
echo "<hr>";
echo 'TSP Name:$p';//single quote cannot parse variables
?>
<hr>
<?php
$a = 5;
echo "{$a} is 5";
echo "<hr>";
echo $a." is 5";