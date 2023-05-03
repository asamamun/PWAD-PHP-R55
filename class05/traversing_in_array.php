<?php
include "./countryArr.php";
echo key($countryList);
echo " : ";
echo current($countryList);
echo "<br>";
next($countryList);
next($countryList);
next($countryList);
next($countryList);
next($countryList);
next($countryList);
echo key($countryList);
echo " : ";
echo current($countryList);
echo "<br>";
prev($countryList);
echo key($countryList);
echo " : ";
echo current($countryList);
echo "<br>";
end($countryList);
echo key($countryList);
echo " : ";
echo current($countryList);
reset($countryList);
?>
<hr>
<?php
echo "<p>Can you name the capitals of these states?</p>";
while($key = key($countryList)) {
 printf("%s - %s <br />", $key,$countryList[$key]);
 next($countryList);
}