<?php
//check.php?uname=admin%40gmail.com&psw=admin&remember=on
echo "You have given the following information: <br>";
echo "User email: " . $_GET['uname']. "<br>";
echo "User pass: " . $_GET['psw']. "<br>";
