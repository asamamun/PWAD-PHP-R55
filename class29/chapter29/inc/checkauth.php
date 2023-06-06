<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
//check user authentication
/* if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'])
{

}
else{
header("location:login.php");
} */
if(!isset($_SESSION['loggedin']) || !$_SESSION['loggedin'])
{
  header("location:login.php");
}