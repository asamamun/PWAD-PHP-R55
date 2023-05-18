<?php
$pageName = "Register";
require '../includes/header.php';
if (isset($_POST['register'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pass1 = $_POST['password'];
  $pass2 = $_POST['c_password'];
  if ($pass1 == $pass2) {
    $users = fopen("../users.sk", "a");
    // $info = $fname . "|" . $lname . "|" . $email . "|" . password_hash($pass1, PASSWORD_DEFAULT) . "\n";
    $info = $email . "|" . $pass1 . "\n";
    fwrite($users, $info);
    fclose($users);
  }
}
?>

<section class="flex items-center justify-center h-screen">
  <div class="block bg-blue-100 rounded-md shadow-md shadow-gray-300 px-6 py-8 w-96">
    <div class="block mb-4">
      <h4 class="text-xl text-white text-center font-bold bg-blue-300 rounded-md px-6 py-2">Register New</h4>
      <p class="text-sm text-red-500 text-center font-medium mt-4">Email or Password don't matched</p>
    </div>
    <form action="" method="post">
      <div class="my-2.5">
        <label for="name">
          <span class="text-base text-gray-900 font-bold">Full Name</span>
        </label>
        <div class="flex items-center gap-2.5 relative my-1.5">
          <input type="text" name="fname" class="block border-2 border-blue-400 focus:outline-none px-4 py-1.5 w-full" id="name" placeholder="John" required />
          <input type="text" name="lname" class="block border-2 border-blue-400 focus:outline-none px-4 py-1.5 w-full" id="name" placeholder="Doe" required />
        </div>
      </div>
      <div class="my-2.5">
        <label for="email">
          <span class="text-base text-gray-900 font-bold">Email Address</span>
        </label>
        <div class="flex items-center relative my-1.5">
          <input type="email" name="email" class="block border-2 border-blue-400 focus:outline-none px-4 py-1.5 w-full" id="email" placeholder="someone@example.com" />
        </div>
      </div>
      <div class="grid grid-cols-2 gap-2 5 my-2 5">
        <div class="block">
          <label for="password">
            <span class="text-base text-gray-900 font-bold">Password</span>
          </label>
          <div class="flex items-center relative my-1.5">
            <input type="password" name="password" class="block border-2 border-blue-400 focus:outline-none px-4 py-1.5 w-full" id="password" placeholder="Password" minlength="8" />
          </div>
        </div>
        <div class="block">
          <label for="c_password">
            <span class="text-base text-gray-900 font-bold">Confirm Password</span>
          </label>
          <div class="flex items-center relative my-1.5">
            <input type="password" name="c_password" class="block border-2 border-blue-400 focus:outline-none px-4 py-1.5 w-full" id="c_password" placeholder="Password" minlength="8" />
          </div>
        </div>
      </div>
      <div class="mt-4">
        <button type="submit" name="register" class="block text-base font-bold text-white bg-blue-400 hover:bg-blue-500 rounded-md px-4 py-1.5 w-full" >Register</button>
      </div>
    </form>
  </div>
</section>

<?php require '../includes/footer.php'; ?>