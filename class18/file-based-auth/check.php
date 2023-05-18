<?php
if(isset($_POST['email']) && isset($_POST['password'])){
    $em = $_POST['email'];
    $pw = $_POST['password'];
    $users = file("user");
    $loggedin = false;
    foreach($users as $user){
        list($e, $p) = explode("|",$user);
        if($em == $e && password_verify($pw,$p)){
            $loggedin = true;
            break;
        }
    }
    if($loggedin){
        echo "welcome $em";
    }
    else{
        header("location:login.php?message=Login failed");
    }

}
else{
    header("location:login.php");
}