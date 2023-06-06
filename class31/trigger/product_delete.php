<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(isset($_GET['id'])){
    require "./database.php";
    $id = $_GET['id'];
    $sql = "delete from products where id='{$id}' limit 1";//replace ID with id.
    try {
        $conn->query($sql);
    } catch (\Throwable $th) {
       echo $th->getMessage();
       exit;
    }
    
    if($conn->affected_rows){
        $_SESSION['m'] = "Product deleted successfully";
        $_SESSION['type'] = "info";
        $conn->close();
        header("Location:index.php");
        exit;
    }
}
else{
    //access denied header
    exit;
}

// echo "you want to delete $id";
