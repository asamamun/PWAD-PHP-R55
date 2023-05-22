<?php
$m = "meet me at 10 AM tomorrow to collect your 5 lac taka";
// echo base64_encode($m);
header("location:decode.php?m=".base64_encode($m));