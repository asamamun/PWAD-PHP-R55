<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require "./database.php";
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $conn->escape_string($_POST['name']);
    $sku = $conn->escape_string($_POST['sku']);
    $desc = $conn->escape_string($_POST['description']);
    $price = $conn->escape_string($_POST['price']);
    $image = isset($_FILES['image'])?$_FILES['image']:null;
    $imagename = null;
    if($image){
        $imagename = time()."_".$image['name'];
        move_uploaded_file($image['tmp_name'],"products/".$imagename);
    }
        //insert into table
        if($imagename){
            $sql = "UPDATE `products` SET `sku`='{$sku}',`name`='{$name}',`description`='{$desc}',`price`='{$price}',`image`='{$imagename}' WHERE id='{$id}'";
        }
        else{
            $sql = "UPDATE `products` SET `sku`='{$sku}',`name`='{$name}',`description`='{$desc}',`price`='{$price}' WHERE id='{$id}'";
        }
        $conn->query($sql);
        if($conn->affected_rows){
            $_SESSION['m'] = "Product Updated Successfully";            
            $_SESSION['type'] = "success";
        }
        else{
            $_SESSION['m'] = "ERROR!! Updating Product. Contact Admin";
            $_SESSION['type'] = "danger";
        }        
        header("location:product_edit.php?id=" . $id);
        exit;
}
if(isset($_GET['id'])){
    
    $id = $_GET['id'];
    // echo "you wabt to edit $id";
    $sql = "select * from products where id='{$id}' limit 1";
    $result = $conn->query($sql);
    if($result->num_rows){
     $info = $result->fetch_assoc();   
    }
    else{
        die("No results found");
        exit();
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
<?php require "inc/session-alert.php"; ?>

    <div class="d-flex justify-content-between">
    
    <h1>Edit Product: </h1>
    <a href="javascript:void(0)" onclick="history.back()" class="btn btn-outline-info p-3"><i class="bi bi-arrow-left-circle-fill"></i></a>
    </div>
    
    <form enctype="multipart/form-data" action="" method="post">
        <input type="hidden" name="id" value="<?= $info['id'] ?>">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" required value="<?= $info['name'] ?>">
      </div>
      <div class="mb-3">
        <label for="sku" class="form-label">SKU</label>
        <input type="text" class="form-control" id="sku" name="sku" required value="<?= $info['sku'] ?>">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required>
        <?= $info['description'] ?>
        </textarea>
      </div>
      <div class="mb-3">
        <div class="row">
            <div class="col-10">
            <label for="image" class="form-label">Image</label>
        <input type="file" name="image" class="form-control" id="image" required>
            </div>
            <div class="col-2">
                <p>Current Image</p>
                <img class="img-fluid" src="products/<?= $info['image'] ?>" alt="">
            </div>
        </div>
        
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" name="price" class="form-control" id="price" required value="<?= $info['price'] ?>">
      </div>
      <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>