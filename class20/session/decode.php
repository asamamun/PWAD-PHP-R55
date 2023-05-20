<?php
session_start();
$sd = 'loggedin|b:0;name|s:5:"user1";lang|s:2:"bn";currency|s:4:"taka";theme|s:9:"darkgreen";';
session_decode($sd);
echo $_SESSION['theme'];