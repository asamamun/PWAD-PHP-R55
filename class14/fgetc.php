<?php
echo 'Are you sure you want to delete? (y/n) ';
$input = fgetc(STDIN);
if (strtoupper($input) == 'Y')
{
    //in php, to delete a file use unlink function
 unlink('1.txt');
}
?>