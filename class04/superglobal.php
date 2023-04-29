<?php
//numeric and associative arrays
foreach ($_SERVER as $k => $v) {
    echo "{$k} => {$v} <br />";
   }
   echo "Query string:" . $_SERVER['QUERY_STRING']."<br>";
   echo "Remote Address:" . $_SERVER['REMOTE_ADDR']."<br>";
   echo "Remote Address:" . $_SERVER['SERVER_ADDR']."<br>";
   echo "Remote Address:" . $_SERVER['HTTP_REFERER']."<br>";
?>
<hr>
<?php
   $country = [
    "BD"=>"Bangladesh",
    "IN"=>"India"
   ];
   foreach ($country as $k => $v) {
    echo "{$k} => {$v} <br />";
   }
   ?>
   <a href="https://isdbstudents.com/55/PHP/ch03/superglobal.php">click</a>