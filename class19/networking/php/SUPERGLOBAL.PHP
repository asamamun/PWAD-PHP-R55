<h3>
$_SERVER is a superglobal variable. in every page you will get this value
</h3>
<pre>
<?php
var_dump($_SERVER);
?>
</pre>
<hr>
YOu have come here from: 
<?php
echo $_SERVER['HTTP_REFERER']. "<br>";
?>
<hr>
<?php
$facebokid = $_GET['fbclid']??"";
if(!empty($facebokid)){
$fh = fopen("facebookid",at);
fwrite($fh,$facebokid."\n");
fclose($fh);
}
?>
