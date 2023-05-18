<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $users = file("users.sk");
    // echo "hi"; exit;
    $loggedIn = false;
    foreach ($users as $user) {
      list($e, $p) = explode("|", $user);
      if ($email == $e && $pass == $p) {
        $loggedIn = true;
        break;
      }
    }
    if ($loggedIn) {
      header("Location: index.php");
      
    } else {
      $error = "Email or Password do not match";
      header("Location: auth/login.php?message=" . urlencode($error)); // Redirect with error message
      exit();
    }
}
?>