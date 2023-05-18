<?php
if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
    if($_SERVER['PHP_AUTH_USER']=="admin" && $_SERVER['PHP_AUTH_PW']=="secret"){
        //echo "you are authorized to view this part of the application";
        header("location:dashboard.php");
        exit;
    }
    else{
        header('WWW-Authenticate: Basic Realm=""');
        unset($_SERVER['PHP_AUTH_USER']); unset($_SERVER['PHP_AUTH_PW']);
        header('HTTP/1.0 401 Unauthorized');
    die ("Not authorized");
        // header('WWW-Authenticate: Basic Realm="Book Projects"');  
    }
}
unset($_SERVER['PHP_AUTH_USER']); unset($_SERVER['PHP_AUTH_PW']);
header('WWW-Authenticate: Basic Realm=""');
header('HTTP/1.0 401 Unauthorized');
die ("Not authorized");
?>