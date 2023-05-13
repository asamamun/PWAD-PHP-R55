<?php
$source = "D:/xampp8110/htdocs";
// $d = opendir(dirname(__FILE__)."/../class13/");
$d = opendir($source);
while($ff = readdir($d) ){
    if(is_dir($source."/".$ff)){
        echo "Folder:". $ff . "<br>";
    }
    else{
        echo "File:". $ff .", FIlesize: ".filesize($source."/".$ff). "<br>";
    }
}