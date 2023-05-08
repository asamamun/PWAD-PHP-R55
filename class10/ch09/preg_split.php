<?php
 $delimitedText = "Jason+++Gilmore+++++++++++Columbus+++OH";
 $fields = preg_split("/\++/", $delimitedText);
 $fields2 = explode("+", $delimitedText);
 foreach($fields as $field) echo $field."<br />";
 foreach($fields2 as $field) echo $field."<br />";
?>