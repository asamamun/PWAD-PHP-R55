<?php
if(isset($_POST['submit'])){
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $pass1  = $_POST['pass1'];
    $pass2  = $_POST['pass2'];
    $line = $name."|".$email."|".$pass1."|".$pass2."|\n";
    $fh = fopen("registration.csv","a");
    fwrite($fh,$line);
    fclose($fh);
    echo "registration successfully submitted";
}