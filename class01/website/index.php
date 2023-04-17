<?php
$page = "Home"; 
include "inc/header.php"; 
?>
<body>
    <div class="container">
    <?php include "inc/navbar.php" ?>
    <!-- carousel -->
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../assets/images/banner/01.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../assets/images/banner/02.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../assets/images/banner/03.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- carousel end -->
    <h1>index/home page</h1>
    <!-- card -->
    <div class="row">
        <?php
        for($i=1;$i<=17;$i++){
            // echo $i ." | ";
            echo '<div class="card col-3" >
            <img src="../../assets/images/1 ('.$i.').jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>';

        }
        ?>

</div>

    <!-- card end -->
    </div>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>