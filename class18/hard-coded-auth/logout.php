<?php
/* session_start();
if(isset($_SERVER['PHP_AUTH_USER'])) unset($_SERVER['PHP_AUTH_USER']);
if(isset($_SERVER['PHP_AUTH_PW'])) unset($_SERVER['PHP_AUTH_PW']);
session_reset();
header("location:built-in-auth-variables.php"); */
session_start();
session_unset();
session_destroy();

?>
if you really want to logout close your browser and open it again. that way auth variables are reset.
<a href="built-in-auth-variables.php">Login here</a>