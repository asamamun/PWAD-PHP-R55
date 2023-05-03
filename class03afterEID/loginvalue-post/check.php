<?php
//check.php?uname=admin%40gmail.com&psw=admin&remember=on
echo "You have given the following information: <br>";
echo "User email: " . $_POST['uname']. "<br>";
echo "User pass: " . $_POST['psw']. "<br>";
