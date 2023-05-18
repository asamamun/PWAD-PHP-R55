<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['domname'])){
        if(checkdnsrr($_POST['domname'],"ANY"))
        {
            $message = "This domain is not available";
        }
        else{
            $message = "This domain is available";
        }
    }
    ?>
    <h1><?= $message??"Check domain" ?></h1>
    <form action="" method="post">
        <input type="text" name="domname" placeholder="domain name" required value="<?= $_POST['domname']??"" ?>">
        <input type="submit" value="Check" name="check">
    </form>
</body>
</html>