<?php
$nowtime = date("Y-m-d H:i:s a");
define("TIMENOW",$nowtime);//define is used to create constant variable
$t = $nowtime;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "embed php file" ?>-time now:<?php echo TIMENOW; ?></title>
    <style></style>

</head>
<body>
    <h1><?php echo TIMENOW ?></h1>
    <h1><?= $t ?></h1>
    <?php $t = "hello world!!!" ?>
    <h1><?= $t ?></h1>
    <script></script>
</body>
</html>: