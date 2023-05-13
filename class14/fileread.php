<?php
// Open a text file for reading purposes
$fh = fopen('test.txt', 'r');
// While the end-of-file hasn't been reached, retrieve the next line
while (!feof($fh)) echo fgets($fh);
// while ($line = fgets($fh)){ echo $line;}
// Close the file
fclose($fh);
/* echo fgets($fh)." <hr>";
echo fgets($fh)." <hr>"; */

?>