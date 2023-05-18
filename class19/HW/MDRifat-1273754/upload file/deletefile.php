<?php
if(isset($_GET['n'])){
    $file = "images/".$_GET['n'];
    if(is_file($file)) unlink($file);
    header("location: image.php");
}