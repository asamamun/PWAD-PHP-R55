<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .imgcontainer {
            display: inline-block;
            position: relative;
            margin: 10px;
        }
        .imgcontainer i:hover{
            cursor: pointer;
        }
        .imgcontainer i {
            display: inline-block;
            width: 15px;
            height: 15px;
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: red;
            border-radius: 50%;
            color: white;            
        }
    </style>
</head>

<body>
    <h1>All Images</h1>
    <?php
    $path = "images";
    define("SEPARATOR", "/");
    $d = opendir("images");
    $imgext = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'ico', 'bmp', 'webp'];
    while ($file = readdir($d)) {
        if (is_file($path . SEPARATOR . $file)) {
            $info = pathinfo($path . SEPARATOR . $file);
            if (in_array($info['extension'], $imgext)) {
                echo "<div class='imgcontainer'><img src=\"{$path}/{$file}\" alt=\"image file\" width='50px' /><i data-imagename=\"{$file}\" title=\"delete image\" onclick='del(\"{$file}\")'>&times</i></div>";
            }
        }
    }
    ?>
    <script>
        function del($n){
            $c= confirm("Are you sure you want to delete");
            if(!$c) return;
            console.log("file" + $n);
            window.location = "deletefile.php?n=" + $n;
        }
    </script>
</body>

</html>