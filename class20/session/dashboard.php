<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
printf("Your login info: %d", $_SESSION['loggedin']);
echo session_id();