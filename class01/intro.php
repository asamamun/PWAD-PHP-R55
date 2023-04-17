<?php
$i = rand(1,17);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing Image Number: <?php echo $i; ?></title>
</head>
<body>
    <h1>running from server</h1>
    <img src="../images/1 (<?php echo $i ?>).jpg" alt="">
    <script></script>
    <?php 
    //test code
    $t = 0;
    for ($i=0; $i < 100; $i++) { 
        $t += $i;
    }
    // echo $t;
    echo rand(1,17);
    ?>
</body>
</html>