<?php
 $summary = <<<SUMM
 The most up to date source for PHP documentation is the PHP manual.
 It contins many examples and user contributed code and comments.
 It is available on the main PHP web site
 <a href="http://www.php.net">PHP’s</a>.
SUMM;
 $words = count(explode(' ',strip_tags($summary)));
 echo "Total words in summary: $words";
?>