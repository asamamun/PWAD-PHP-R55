<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if(isset($_POST['add'])){

    require "./database.php";
    $name = $conn->escape_string($_POST['name']);
    $sku = $conn->escape_string($_POST['sku']);
    $desc = $conn->escape_string($_POST['description']);
    $price = $_POST['price'];
    $image = isset($_FILES['image'])?$_FILES['image']:null;
    $imagename = null;
    if($image){
        $imagename = time()."_".$image['name'];
        move_uploaded_file($image['tmp_name'],"products/".$imagename);
    }
    //insert into table
    // $sql = "INSERT INTO `products`(`id`, `sku`, `name`, `description`, `price`, `image`, `created_at`) VALUES (null,'{$sku}','{$name}','{$desc}','{$price}','{$imagename}',null)";
    $sql = "call add_product('{$sku}','{$name}','{$desc}','{$price}','{$imagename}')";
    $conn->query($sql);
    
    $_SESSION['m'] = "Product Added Successfully";
    $_SESSION['type'] = "info";
    $conn->close();
    //$message = "Added";
    header("location:product_add.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <div class="container">

<?php require "inc/session-alert.php"; ?>

    <div class="d-flex justify-content-between">
    
    <h1>Add Product: </h1>
    <a href="javascript:void(0)" onclick="history.back()" class="btn btn-outline-info p-4" style="font-size: 3em;">&larr;</a>
    </div>
    
    <form enctype="multipart/form-data" action="" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" required>
      </div>
      <div class="mb-3">
        <label for="sku" class="form-label">SKU</label>
        <input type="text" class="form-control" id="sku" name="sku" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" class="form-control" id="image" required>
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" class="form-control" id="price" required>
      </div>
      <button type="submit" name="add" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
