<?php
session_start();
$pageName = "Homepage";
require './includes/header.php';
if(!$_SESSION['loggedIn']){
  header("Location: auth/index.php");
}
if(isset($_POST['upload'])){
  $f = $_FILES['file'];
  if ($f['size'] <= 1024 * 1024) {
    $allowedImages = array("image/jpg", "image/jpeg", "image/gif", "image/png", "image/webp");
    $allowedPDFs = array("application/pdf");
    if (in_array($f['type'], $allowedImages)) {
      $name = time() . "_sk" . ".jpg";
      move_uploaded_file($f['tmp_name'], "uploads/images/" . $name);
      $message = "Image upload complete";
    } elseif (in_array($f['type'], $allowedPDFs)) {
      $name = time() . "_sk" .".pdf";
      move_uploaded_file($f['tmp_name'], "uploads/pdfs/" . $name);
      $message = "PDF upload complete";
    } else {
      $message = "File type not allowed";
    }
  } else {
    $message = "File size exceeds the limit (1MB)";
  }
}
?>
<main class="flex bg-white" >
<?php include './includes/sidebar.php' ?>
<div class="w-5/6">
  <section class="mx-20 xs:mx-4 sm:mx-6 md:mx-8 lg:mx-12 my-12">
  </section>
</div>
</main>
<?php require './includes/footer.php'; ?>