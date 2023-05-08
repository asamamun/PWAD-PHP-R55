<h1>error_reporting.php?filename=a.txt</h1>
<h1>error_reporting.php?filename=users</h1>
<?php
// ini_set("error_reporting", E_ALL & ~E_ERROR);
ini_set("display_errors", 0);
error_log("##~~##User Visited error_reporting file at " .date("Y-m-d H:i:s") ."\n");
echo "hello world";
echo " from IDB";
?>
<hr>
<?php
try {
    $fh= fopen($_GET['filename'],"r");
echo nl2br(fread($fh,filesize($_GET['filename'])));
fclose($fh);
} catch (\Throwable $th) {
    // echo "<h3>catch runs</h3>";
    // echo $th->getMessage();
    // echo $th->getFile();
    echo $th->getLine();
}


?>