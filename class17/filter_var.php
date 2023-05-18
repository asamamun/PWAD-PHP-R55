<?php


$b = "IDB";
$c =" abc gmail.com";
$d = "http://example.com";
if(isset($_GET['id'])){
    $a = $_GET['id'];
    //echo $a;
    //echo strip_tags($a);
    echo htmlentities($a);
    echo "<hr>";
    echo filter_var($a, FILTER_VALIDATE_INT);
}
echo filter_var($c, FILTER_VALIDATE_EMAIL);
echo "<hr>";
echo filter_var($d, FILTER_VALIDATE_URL);
echo "<hr>";
echo filter_var($c, FILTER_SANITIZE_EMAIL);
?>
<hr>
<h1>sanitize string</h1>
<?php
$a = "some string * -rm ; ls; ";
echo filter_var($a, FILTER_SANITIZE_STRING);
echo "<hr>";
$userInput = "Love the site. E-mail me at <a href='http://www.example.
com'>Spammer</a>.";
$sanitizedInput = filter_var($userInput, FILTER_SANITIZE_STRING);
// $sanitizedInput = Love the site. E-mail me at Spammer.
echo $sanitizedInput;


