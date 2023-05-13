<?php
$lists = [
    "palo"=> "https://www.prothomalo.com/",
    'jugantor'=> "https://www.jugantor.com",
    'kalerkantha'=>"https://www.kalerkantho.com/"
];
foreach($lists as $k=>$v){
    //create folder if not exist
if(!is_dir($k)) mkdir($k, 0777);
//read the link and store in $html variable
/* $news = file($v);
$html = "";
foreach($news as $n){
    $html .= $n;
} */
$html = file_get_contents($v);
//write the html into a file
$datatime = date("Y-m-d-H");
$fh = fopen($k."/".$k.$datatime.".html","w");
fwrite($fh,$html);
fclose($fh);
}