<?php
$fh = fopen("test.txt","r");
echo fread($fh,filesize("test.txt"));
fclose($fh);