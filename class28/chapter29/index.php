<?php
session_start();
require "./database.php";
$sql = "select * from products where price >500";
$result = $conn->query($sql);
$conn->close();
// echo $result->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>All Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
      .aspect-ratio-1x1 {
  aspect-ratio: 1/1;
}
    </style>
</head>
<body>
    <div class="container">
        <a href="product_add.php" class="btn btn-outline-primary">Add Product</a>
        <?php include "./inc/session-alert.php"; ?>
    <div class="row">
        <?php
if($result->num_rows){
/*     while($row = $result->fetch_object()){
    while($row = $result->fetch_array()){
    while($row = $result->fetch_row()){ */
    while($row = $result->fetch_assoc()){
    ?>
  <div class="card col-md-3 mb-2">
    <img src="products/<?= $row['image'] ?>" class="card-img-top aspect-ratio-1x1" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?= $row['name'] ?></h5>
      <p class="card-text"><?= createExcerpt($row['description'],60) ?></p>
      <p class="card-text"><small class="text-body-secondary"><?= $row['price'] ?></small></p>
    <p>
      <a href="product_edit.php?id=<?= $row['id'] ?>"><i class="bi bi-pencil-square"></i></a>
      <a href="product_delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')" title="delete <?= $row['name'] ?>"<i class="bi bi-trash"></i></a>
    </p>
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