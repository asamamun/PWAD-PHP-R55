<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  $_SESSION['name'] = "user1";
  $_SESSION['lang'] = "bn";
  $_SESSION['currency'] = "taka";
  $_SESSION['theme'] = "darkgreen";

  var_dump($_SESSION);

$fh = fopen($_SESSION['name'],"w");
fwrite($fh,session_encode());
fclose($fh);
