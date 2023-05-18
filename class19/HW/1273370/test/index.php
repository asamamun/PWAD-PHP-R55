<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <form action="" class="row g-3" method="post" enctype="multipart/form-data">

            <div class="mb-3 g-3">
                <label for="" class="form-label" for="formFile">Upload file</label>
                <input type="file" name="image" class="form-control" id="formFile">

            </div> 
            <div class="mb-3">
                <input for="" class="btn btn-outline-primary" type="submit" name="upload" value="upload"></input>
            </div>
        </form>
    </div>

    <?php
    if(isset($_POST['upload'])){
        $file = $_FILES['image'];
    
        // $filename = $_file['image']['name'];
        // $fileTmpName = $_file['image']['tmp_name'];
        // $fileSize = $_file['image']['size'];
        // $fileError= $_file['image']['error'];
        // $fileType = $_file['image']['type'];
       foreach ($file  as $key => $value){
        echo "$key: $value <br>";
       }
/* 2253002
500000 */
       $allow =array('image/png','image/gif','image/webpg' ,'image/jpeg');
       if(in_array($file['type'],$allow) && $file['size']<5500000){
        $name = rand (50000,70000)."_".time().".jpg";
        move_uploaded_file($file['tmp_name'],"sajib/".$name);
        echo "your photo submitted ";
       }else{
        echo "Your photo not allowed! or size bigger than 5MB";
       }
  

    }



    ?>
</body>

</html>