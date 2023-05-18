<?php
if(isset($_POST['upload'])){
    //image 1
    if(isset($_FILES['image1'])){
$f = $_FILES['image1']; 
// foreach ($f as $key => $value) 
// {    
//     echo "$key: $value<br>";
// }

$allowed = array("image/jpeg","image/pdf", "image/gif", "image/png",'image/webp');
// if(in_array($f['type'],$allowed) && $f['size'] < 512000){
if(in_array($f['type'],$allowed)){
    // $name = rand(10000,99999)."_".time().".jpg";
    move_uploaded_file($f['tmp_name'],"images/".$f['name']);
    $message = "upload complete";
}
else{
    $message = "sorry";
}
    }
//image 2

//image 3

}
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
    <h4> <?= $message??"File Upload"; ?></h4>
    <div class="container">
        <form class="row g-3" enctype="multipart/form-data" method="post">
            <div class="mb-3">                
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Image</label>
                    <input class="form-control" type="file" id="formFile" name="image1" required accept="image/*;capture=camera">
                </div>
                <input class="btn btn-outline-primary" type="submit" name="upload" value="upload">
            </div>
        </form>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!-- <?php

$dir_path = "images/";
if(is_dir($dir_path))
{
    $files = scandir($dir_path);
    
    for($i = 0; $i < count($files); $i++)
    {
        if($files[$i] !='.' && $files[$i] !='..')
        {
            // get file name
            echo "File Name -> $files[$i]<br>";        
            echo "<img src='$dir_path$files[$i]' style='width:100px;height:100px;'><br>";
        }
    }
}
?> -->
  <h1>All Images</h1>
    <?php
    $path = "images";
    define("SEPARATOR", "/");
    $d = opendir("images");
    $imgext = ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp'];
    while ($file = readdir($d)) {
        if (is_file($path . SEPARATOR . $file)) {
            $info = pathinfo($path . SEPARATOR . $file);
            if (in_array($info['extension'], $imgext)) {
                echo "<div class='imgcontainer'><a href=\"{$path}/{$file}\" target='_blank'><img src=\"{$path}/{$file}\" alt=\"image file\" width='50px' /></a><i data-imagename=\"{$file}\" title=\"delete image\" onclick='del(\"{$file}\")'>&times</i></div>";
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