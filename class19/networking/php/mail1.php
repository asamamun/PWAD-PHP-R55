<?php
$sub = "Test mail from SIR 22 ".time(); 
if(mail("mamuncitiut@gmail.com",$sub,"Testing mail function in php 22","From:admin@isdbstudents.com\r\n")) echo "SENT!!";
else echo "ERROR!!!";
?>