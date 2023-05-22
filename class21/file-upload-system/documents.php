<?php
session_start();
$pageName = "Documents";
require './includes/header.php';

if(!$_SESSION['loggedIn']){
  header("Location: auth/index.php");
}

?>



<main class="flex bg-white" >
<?php include './includes/sidebar.php' ?>
<div class="w-5/6">
  <section class="mx-20 xs:mx-4 sm:mx-6 md:mx-8 lg:mx-12 my-12">
    <?php
      $pdfPath = "uploads/pdfs";
      $pdfExtensions = ['pdf'];
      function displayFiles($path, $extensions) {
        $files = scandir($path);
        foreach ($files as $file) {
          $extension = pathinfo($file, PATHINFO_EXTENSION);
          if (in_array($extension, $extensions)) {
            if ($extension == 'pdf' ) {
              echo "<div class='block bg-gray-100 rounded-md shadow-md shadow-gray-300 relative p-3 xs:p-2
              <img src=\"pdf-icon.png\" class='block rounded-md w-full' alt='image file' />
              <div class='grid grid-cols-2 gap-2 mt-2 text-xs text-white font-bold'>
                <a href='{$path}/{$file}' class='block text-center bg-blue-500 hover:bg-blue-600 rounded-md px-2 py-2 xs:py-1 w-full' title='Download' download >
                  <i class='fas fa-download'></i>
                </a>
                <button type='button' class='block bg-red-500 hover:bg-red-600 rounded-md px-2 py-2 xs:py-1 w-full' data-imagename='{$file}' title='Delete' onclick='del(\"{$file}\")' >
                  <i class='fas fa-trash-alt'></i>
                </button>
              </div></div>";
            }
          }
        }
      }
      echo "<div class=\"block bg-gray-100 rounded-md shadow-md shadow-gray-300 px-6 py-2 mt-8 my-2 w-full\">
              <h2 class=\"text-2xl text-gray-800 font-bold\">Displaying All PDFS</h2>
            </div>
            <div class='grid grid-cols-6 xs:grid-cols-3 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 xs:gap-3 my-6'>";
              displayFiles($pdfPath, $pdfExtensions);
      echo "</div>";
    ?>
    <script>
      function del($n){
        $c= confirm("Are you sure you want to delete");
        if(!$c) return;
        console.log("file" + $n);
        window.location = "delete.php?n=" + $n;
      }
    </script>
  </section>
</div>
</main>
<?php require './includes/footer.php'; ?>