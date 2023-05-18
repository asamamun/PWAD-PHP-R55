<?php
$em = "mamun@gmail.com";
$p1 = "11111";
$p2 ="11111";
$fh = fopen("user","a");
$line = $em."|".password_hash($p1,PASSWORD_DEFAULT)."|\n";
fwrite($fh,$line);
fclose($fh);