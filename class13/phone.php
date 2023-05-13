<?php
$pn="01911039525";
//echo substr_replace("01912345678","*****",4,5);
echo str_mask($pn, 4, 5, "*");