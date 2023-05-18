<?php
$pageName = "Login";
require '../includes/header.php';
?>

<section class="flex items-center justify-center h-screen">
  <div class="block bg-blue-100 rounded-md shadow-md shadow-gray-300 px-6 py-8 w-96">
    <div class="block mb-4">
      <h4 class="text-xl text-white text-center font-bold bg-blue-300 rounded-md px-6 py-2">Login Here</h4>
      <p class="text-sm text-red-500 text-center font-medium mt-4"><?= isset($_GET['message']) ? $_GET['message'] : '' ?></p>
    </div>
    <form action="<?= $_SERVER['PHP_SELF'] ?>/../../check.php" method="post">
      <div class="my-4">
        <label for="email">
          <span class="text-base text-gray-900 font-bold">Email Address</span>
        </label>
        <div class="flex items-center relative my-1.5">
          <input type="email" name="email" class="block border-2 border-blue-400 focus:outline-none px-4 py-1.5 w-full" id="email" placeholder="someone@example.com" required />
        </div>
      </div>
      <div class="my-4">
        <label for="password">
          <span class="text-base text-gray-900 font-bold">Password</span>
        </label>
        <div class="flex items-center relative my-1.5">
          <input type="password" name="password" class="block border-2 border-blue-400 focus:outline-none px-4 py-1.5 w-full" id="Password" placeholder="password" minlength="8" required />
        </div>
      </div>
      <div class="mt-6">
        <button type="submit" name="login" class="block text-base font-bold text-white bg-blue-400 hover:bg-blue-500 rounded-md px-4 py-1.5 w-full" >Login</button>
      </div>
    </form>
  </div>
</section>

<?php require '../includes/footer.php'; ?>
