<h3>strspn</h3>
<?php
$password = "AAB5CDABCD";
echo strspn($password,"ABCD");
echo "<br>";
echo strlen($password);
?>
<hr>
<h3>strcspn</h3>
<?php
$password = "A1243AABCDABCD";
echo strcspn($password,"ABCD");
echo "<br>";
echo strlen($password);
?>