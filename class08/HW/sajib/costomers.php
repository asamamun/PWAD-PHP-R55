<?php require "info.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
/*         table{
          color:cornsilk;
        } */
    </style>
</head>
<body>
<table border="2px solid green" width="100px">
    <?php
    $costomers = file("customers-10000.txt");
    //var_dump($costomers);
    $head =explode("|",$costomers[0]);
    //var_dump($head);
    echo "<tr>
    <th> $head[0]</th>
    <th> $head[1]</th>
    <th> $head[2]</th>
    <th> $head[3]</th>
    <th> $head[4]</th>
    <th> $head[5]</th>
    <th> $head[6]</th>
    <th> $head[7]</th>
    <th> $head[8]</th>
    <th> $head[9]</th>
    <th> $head[10]</th>
    <th> $head[11]</th>   
    </tr>";
    foreach ($costomers as $key => $value) {
       if($key==0)continue;
       $info = explode("|",$value);
       $costomers = new costomers($info);
       $costomers->nall();
    }

    ?>
</table>    

</body>
</html>