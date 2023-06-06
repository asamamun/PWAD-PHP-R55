<?php
if(isset($_GET['id'])){
    require "database.php";
    $id =$conn->escape_string($_GET['id']);
    $sql = "select * from products where id='{$id}' limit 1";
    $result = $conn->query($sql);
    if($result->num_rows){
        $info = $result->fetch_assoc();
/*         echo "<pre>";
        var_dump($info);
        echo "</pre>"; */
    }
    else{
        echo "no data available";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $info['name'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="products/<?= $info['image'] ?>" width="250" /> </div>
                            <div class="thumbnail text-center"> <img onclick="change_image(this)" src="products/<?= $info['image'] ?>" width="70"> <img onclick="change_image(this)" src="products/IUT.jpg" width="70"> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"><?= $info['sku'] ?></span>
                                <h5 class="text-uppercase"><?= $info['name'] ?></h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price">$<?= $info['price'] ?></span>
                                    <div class="ml-2"> <small class="dis-price">$<?= $info['price'] ?></small> <span>0% OFF</span> </div>
                                </div>
                            </div>
                            <p class="about"><?= $info['description'] ?></p>
                            <div class="sizes mt-5">
                                <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="size" value="XXL"> <span>XXL</span> </label>
                            </div>
                            <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function change_image(image){
var container = document.getElementById("main-image");
container.src = image.src;
}
document.addEventListener("DOMContentLoaded", function(event) {
});
</script>
</body>
</html>
