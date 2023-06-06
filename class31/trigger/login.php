<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require "./database.php";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $conn->escape_string($_POST["email"]);
  $password = $_POST["password"];

  // Retrieve user record from the database
  $sql = "SELECT * FROM users WHERE email = '$email' limit 1";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $hashedPassword = $row["password"];

    // Use password_verify() to check if the provided password matches the stored hashed password
    if (password_verify($password, $hashedPassword)) {
      // Login successful
      //echo "Login successful!";
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];
        if($row['role'] == "1"){ 
      header("location:index.php");
        }
        elseif ($row['role'] == "2"){
            header("location:admin/dashboard.php");
        }
        else{
            header("location:index.php");
        }
    } else {
      // Invalid password
      echo "Invalid email or password.";
    }
  } else {
    // User not found
    echo "Invalid email or password.";
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
  <div class="container">
    <?php require "./inc/session-alert.php"; ?>
    <h1>User Login</h1>
    <form action="login.php" method="POST">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
