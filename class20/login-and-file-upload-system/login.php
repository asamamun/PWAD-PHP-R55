<?php if (session_status() == PHP_SESSION_NONE) {
  session_start();
} 
if(isset($_SESSION['auth']) && $_SESSION['auth']){
    header("location:index.php");
}
?>
<?php

                            if (isset($_POST['submit']))
                            {
                                $email = $_POST['email'];
                                $password = $_POST['User_Pwd'];

                                $users = file("./db/users");

                                $loggedin = false;
                                foreach($users as $user) {
                                    list($name, $db_email, $db_password) = explode(",", $user);
                                    if ($email == $db_email && $password == $db_password) {
                                        //$loggedin = true;
                                        $_SESSION['auth'] = true;
                                        $_SESSION['username'] = $name;
                                        $_SESSION['useremail'] = $db_email;
                                        header("location:index.php");             
                                        
                                    }
                                }
                                

                                $message= "<p class='alert alert-danger mt-3'>Invalid Email or Password...!</p>";
                                
                            }

                        ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
</head>
<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 mx-auto">
                <div class="row">
                    <div class="offset-2 col-md-8">
                        <h5 class="pg-title text-center mt-3">User Login</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-2 col-md-8 my-2">
                        <div class="card">
                            <div class="card-body">
                                <form action="" id="LoginForm" method="POST">
                                    <h3><?= $message??"";?></h3>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control" placeholder="Enter Email" required="" aria-invalid="false">
                                                <span id="email-error" class="text-danger error-msg"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input name="User_Pwd" type="password" class="form-control" placeholder="Enter Password" required="">
                                                <span id="User_Pwd-error" class="text-danger error-msg"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group float-right">
                                                <a href="register.php">Not user yet? Register</a>
                                                <input type="submit" value="Login" name="submit" class="form-control btn btn-success mt-3">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="./assets/js/jquery-3.6.4.min.js"></script>
<script src="./assets/js/bootstrap.bundle.js"></script>

</body>
</html>