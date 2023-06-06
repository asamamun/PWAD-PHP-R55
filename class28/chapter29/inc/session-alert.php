<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php if(isset($_SESSION['m'])){ 
  $m = $_SESSION['m'];  
  $t = $_SESSION['type']??"primary"; 
  unset($_SESSION['m']);  
  ?>
  <div class="alert alert-<?= $t?> alert-dismissible fade show" role="alert">
    <?= $m; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php
    
  }
    ?>