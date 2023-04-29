<?php
 $secretNumber = 453;
 if ($_GET['guess'] == $secretNumber) {
 echo "Congratulations!";
 } else {
 echo "Sorry!";
 }
?>