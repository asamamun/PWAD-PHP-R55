<?php
 // Which server to ping?
//  $server = $_GET['a'];
 $server = "www.youtube.com";
 // Ping the server how many times?
 $count = 3;
 // Perform the task
 echo "<pre>";
//  system("ping -c {$count} {$server}");
echo system("ping $server"); 
echo "</pre>";
?>