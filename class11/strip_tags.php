<?php
 $input = "Email <a href='spammer@example.com'>spammer@example.com</a>";
 echo $input;
 echo "<br>";
 echo strip_tags($input);
?>
<hr>
<?php
$input = "This <a href='http://www.example.com/'>example</a>is <b>awesome</b>!";
echo strip_tags($input, "<a>");