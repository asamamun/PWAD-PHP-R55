<?php
session_start();
if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])){
    unset($_SERVER['PHP_AUTH_USER']); unset($_SERVER['PHP_AUTH_PW']);
    header("location:built-in-auth-variables.php"); 
}
if($_SERVER['PHP_AUTH_USER'] !="admin" || $_SERVER['PHP_AUTH_PW']!="secret"){
    //echo "you are authorized to view this part of the application";
    unset($_SERVER['PHP_AUTH_USER']); unset($_SERVER['PHP_AUTH_PW']);
    header("location:built-in-auth-variables.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome to <?= $_SERVER['PHP_AUTH_USER'] ?> dashboard</h1>
    <?php var_dump($_SESSION) ?>
    <a href="logout.php">Logout</a>
</body>
</html>