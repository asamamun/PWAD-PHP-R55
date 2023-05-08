<?php
 $line = "dfgvima is the greatest word processor ever created! Oh sadfvIma, how I 
love thee!";
 if (preg_match("/Vim/i", $line, $match)){
    print "Match found!";
    var_dump($match);
 } 
 else echo "No match found!";
?>