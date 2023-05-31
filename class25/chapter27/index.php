<?php
require "./database.php";
$sql = "select * from products where 1";
$result = $conn->query($sql);
//echo $result->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      .aspect-ratio-1x1 {
  aspect-ratio: 2/1;
}
    </style>
</head>
<body>
    <div class="container">
        <a href="product_add.php" class="btn btn-outline-primary">Add Product</a>
    <div class="row">
        <?php
if($result->num_rows){
    while($row = $result->fetch_assoc()){
    //    var_dump($row); 
    ?>
  <div class="card col-md-3">
    <img src="products/<?= $row['image'] ?>" class="card-img-top aspect-ratio-1x1" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?= $row['name'] ?></h5>
      <p class="card-text"><?= $row['description'] ?></p>
      <p class="card-text"><small class="text-body-secondary"><?= $row['price'] ?></small></p>
    </div>
  </div>
    <?php
    }
}

?>
  
  

</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>