<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    if(isset($_POST['domname'])){
        var_dump(dns_get_record($_POST['domname']));
    }
    ?>
    </pre>
    <h1><?= $message??"Check domain" ?></h1>
    <form action="" method="post">
        <input type="text" name="domname" placeholder="domain name" required value="<?= $_POST['domname']??"" ?>">
        <input type="submit" value="Check" name="check">
    </form>
</body>
</html>