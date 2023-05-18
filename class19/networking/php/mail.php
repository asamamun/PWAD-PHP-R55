<p>https://isdbstudents.com/49/php/mail.php?to=name@gmail.com</p>
<?php
$to = $_GET['to'];
$sub = "Test mail from SIR ".time(); 
if(mail($to,$sub,"You are selected for 50000 doller. Please bKash 01911123456","From:billgates@hotmail.com\r\n")) echo "SENT!!";
else echo "ERROR!!!";
?>