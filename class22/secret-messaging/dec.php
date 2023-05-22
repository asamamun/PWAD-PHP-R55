<?php
// var_dump(openssl_get_cipher_methods());
// exit;
if(isset($_POST['k']) && isset($_POST['d'])){
    require "class.php";
    $key = $_POST['k'];
    $message = $_POST['d'];
    $o = new AES($key);
    $result = $o->decrypt($message);
    //echo $result;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Messaging with Key: Decrypt Message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center">
    <a class="btn btn-outline-primary m-1" href="index.php">Encrypt Message</a> 
    <a class="btn btn-outline-info m-1" href="dec.php">Decrypt message</a>
    </div>
    <form action="" method="post">
    <div class="form-group">
            <label for="k" class="form-label">Your Key</label>
            <input class="form-control" type="text" id="k" name="k" placeholder="secret key" required>
        </div>
        
        <div class="form-group">
            <label for="d">Your Message</label>
            <textarea class="form-control" id="d" name="d" required></textarea>
        </div>        
        <input class=" my-3 btn btn-outline-danger" type="submit" value="Decrypt message with your secret key">
    </form>
    <hr>
    <?php 
    if(isset($result)){
        ?>
    <div>
        <h1>You Original message: </h1>
        <p><?php echo $result??"";?></p>
    </div>
    <?php } ?>
</div>
</body>
</html>


