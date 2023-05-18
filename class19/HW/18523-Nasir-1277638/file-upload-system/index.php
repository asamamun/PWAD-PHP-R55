<?php
$pageName = "Homepage";
require './includes/header.php';

if(isset($_POST['upload'])){
  $f = $_FILES['file'];
  if ($f['size'] <= 1024 * 1024) {
    $allowedImages = array("image/jpg", "image/jpeg", "image/gif", "image/png", "image/webp");
    $allowedPDFs = array("application/pdf");
    if (in_array($f['type'], $allowedImages)) {
      $name = rand(10000, 99999) . "_" . time() . "_sk.jpg";
      move_uploaded_file($f['tmp_name'], "uploads/images/" . $name);
      $message = "Image upload complete";
    } elseif (in_array($f['type'], $allowedPDFs)) {
      $name = rand(10000, 99999) . "_" . time() . "_sk.pdf";
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

<section class="flex items-center justify-center my-12">
  <div class="block bg-gray-100 rounded-md shadow-md shadow-gray-300 px-6 py-8 w-96">
    <p class="text-xl text-red-600 text-center font-bold mb-4"><?= $message??"File Upload"; ?></p>
    <form action="" method="post" enctype="multipart/form-data" >
      <div class="grid grid-cols-2 gap-1 mb-2 h-40">
        <div class="flex items-center justify-center w-full">
          <label for="imageInput" class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
              <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
              <p class="mb-2 text-sm text-gray-500 text-center"><span class="font-semibold">Click to upload</span> <br />or drag and drop</p>
              <p class="text-xs text-gray-500 text-center">SVG, PNG, JPG or GIF <br />(MAX. UPLOAD SIZE 1MB)</p>
            </div>
            <input type="file" name="file" class="hidden" id="imageInput" />
          </label>
        </div> 
        <div class="flex items-center justify-center border-2 border-gray-300 border-dashed rounded-lg p-0.5 h-40">
          <div id="imageContainer">
          <img id="blah" src="#" alt="your image" />
          </div>
        </div>
      </div>
      <div class="mt-6">
        <button type="submit" name="upload" class="block text-base font-bold text-white bg-blue-400 hover:bg-blue-500 rounded-md px-4 py-1.5 w-full" >Upload</button>
      </div>
    </form>
  </div>
</section>

<section class="mx-20 my-12">
  <?php
    $imagePath = "uploads/images";
    $pdfPath = "uploads/pdfs";
    $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    $pdfExtensions = ['pdf'];
    function displayFiles($path, $extensions) {
      $files = scandir($path);
      foreach ($files as $file) {
        $extension = pathinfo($file, PATHINFO_EXTENSION);
        if (in_array($extension, $extensions)) {
          if ($extension !== 'pdf' ) {
            echo "<div class='block bg-gray-100 rounded-md shadow-md shadow-gray-300 relative p-4 my-8'><a href='{$path}/{$file}' width='100%' download ><img src='{$path}/{$file}' alt='image file' width='100%' /></a><i class=\"fas fa-close block text-xl text-white text-center font-bold bg-red-500 rounded-full absolute top-0 right-0 pt-0.5 w-8 h-8 cursor-pointer\" data-imagename='{$file}' title='delete image' onclick='del(\"{$file}\")'></i></div>";
          } else {
            echo "<div class='block bg-gray-100 rounded-md shadow-md shadow-gray-300 relative p-4 my-8'><a href='{$path}/{$file}' width='100%' download ><img src=\"./assets/pdf-icon-png-2056.png\" class=\"w-full h-64\" /></a><i class=\"fas fa-close block text-xl text-white text-center font-bold bg-red-500 rounded-full absolute top-0 right-0 pt-0.5 w-8 h-8 cursor-pointer\" data-imagename='{$file}' title='delete image' onclick='del(\"{$file}\")'></i></div>";
          }
        }
      }
    }
    echo "<div class=\"block bg-gray-100 rounded-md shadow-md shadow-gray-300 px-6 py-2 my-2 w-full\">
            <h2 class=\"text-2xl text-gray-800 font-bold\">Displaying All Images</h2>
          </div>
          <div class='grid grid-cols-4 gap-8 my-2'>";
            displayFiles($imagePath, $imageExtensions);
    echo "</div>";
    echo "<div class=\"block bg-gray-100 rounded-md shadow-md shadow-gray-300 px-6 py-2 mt-8 my-2 w-full\">
            <h2 class=\"text-2xl text-gray-800 font-bold\">Displaying All PDFS</h2>
          </div>
          <div class='grid grid-cols-4 gap-8 my-2'>";
            displayFiles($pdfPath, $pdfExtensions);
    echo "</div>";
    ?>
    <script>
      var imgInp = document.getElementById("imageInput");
      var blah = document.getElementById("blah");
      imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
      function del($n){
        $c= confirm("Are you sure you want to delete");
        if(!$c) return;
        console.log("file" + $n);
        window.location = "delete.php?n=" + $n;
      }
    </script>
</section>

<?php require './includes/footer.php'; ?>

