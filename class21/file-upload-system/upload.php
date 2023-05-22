<?php
session_start();
$pageName = "Upload";
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
      $name = date("Y-m-d") . "_" . time() . "_sk" . ".jpg";
      move_uploaded_file($f['tmp_name'], "uploads/images/" . $name);
      $message = "Image upload complete";
    } elseif (in_array($f['type'], $allowedPDFs)) {
      $name = date("Y-m-d") . "_" . time() . "_sk" .".pdf";
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
  <section class="flex items-center justify-center my-12 h-screen">
    <div class="block bg-gray-100 rounded-md shadow-md shadow-gray-300 px-6 py-8 w-96">
      <p class="text-xl text-red-600 text-center font-bold mb-4"><?= $message??"File Upload"; ?></p>
      <form action="" method="post" enctype="multipart/form-data" >
        <div class="grid grid-cols-2 gap-1 mb-2 h-40">
          <div class="flex items-center justify-center w-full" >
            <label for="imageInput" class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
              <div class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                <p class="mb-2 text-sm text-gray-500 text-center"><span class="font-semibold">Click to upload</span></p>
                <p class="text-xs text-gray-500 text-center">SVG, PNG, JPG or GIF <br />(MAX. UPLOAD SIZE 1MB)</p>
              </div>
              <input type="file" name="file" class="hidden" id="imageInput" required accept="image/*;capture=camera" />
            </label>
          </div> 
          <div class="flex items-center justify-center border-2 border-gray-300 border-dashed rounded-lg p-0.5 h-40">
            <div id="imageContainer" class="py-0.5" >
              <img id="dummy" src="./dummy-post-square-1.jpg" class="block rounded-md py-0.5 w-full" alt="your image" />
            </div>
          </div>
        </div>
        <div class="mt-6">
          <button type="submit" name="upload" class="block text-base font-bold text-white bg-blue-400 hover:bg-blue-500 rounded-md px-4 py-1.5 w-full" >Upload</button>
        </div>
      </form>
    </div>
    <script>
      var imgInp = document.getElementById("imageInput");
      var dummy = document.getElementById("dummy");
      imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
          dummy.src = URL.createObjectURL(file)
        }
      }
    </script>
  </section>
</div>
</main>
<?php require './includes/footer.php'; ?>