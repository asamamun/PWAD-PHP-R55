<?php
require_once "class.ImageLib.php";
$image = "nice_sunset_hdr_514537.jpg";
ImageLib::resize($image,"convert1.jpg",640,null);
// ImageLib::resize($image,"convert2.jpg",800,600);
// ImageLib::resize($image,"convert3.jpg",1024,768);
