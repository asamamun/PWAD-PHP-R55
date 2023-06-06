<?php
session_start();
if(isset($_POST['register'])){
    require "./database.php";
    $name =$conn->escape_string($_POST["name"]);
  $email = $conn->escape_string($_POST["email"]);
  $password = $_POST["password"];
  $password2 = $_POST["password2"];
  if($password === $password2){
    $hash = password_hash($password,PASSWORD_DEFAULT);
    // Insert the values into the users table
  $sql = "INSERT INTO users (name, email, password, role, status) VALUES ('$name', '$email', '$hash', 1, 1)";

  if ($conn->query($sql) === TRUE) {
    // Registration successful
    // echo "Registration successful!";
    $_SESSION['m'] = 'Registration successful!';
    $_SESSION['type'] = 'info';
    header("location: login.php");
    exit;//
  } else {
    // Registration failed
    echo "Error: " . $conn->error;
  }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
  <div class="container">
    <h1>User Registration</h1>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="mb-3">
        <label for="password2" class="form-label">Retype Password</label>
        <input type="password" class="form-control" id="password2" name="password2" required>
      </div>
      <button type="submit" name="register" class="btn btn-primary">Register</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
