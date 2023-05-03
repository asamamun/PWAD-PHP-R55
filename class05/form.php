<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    var x = 5;
    <?php
    include "./fx.php";

    function sanitize_data(&$value, $key) {
        $value = strip_tags($value);
        }
        if(isset($_POST['keyword'])){
        array_walk($_POST['keyword'],"sanitize_data");
        echo AV($_POST['keyword']);
        }
    ?>
<form action="" method="post">
<p>
 Provide up to six keywords that you believe best describe the state in
 which you live:
</p>
<p>Keyword 1:<br />
<input type="text" name="keyword[]" size="20" maxlength="80" value="" /></p>
<p>Keyword 2:<br />
<input type="text" name="keyword[]" size="20" maxlength="80" value="" /></p>
<p>Keyword 3:<br />
<input type="text" name="keyword[]" size="20" maxlength="80" value="" /></p>
<p>Keyword 4:<br />
<input type="text" name="keyword[]" size="20" maxlength="80" value="" /></p>
<p>Keyword 5:<br />
<input type="text" name="keyword[]" size="20" maxlength="80" value="" /></p>
<p>Keyword 6:<br />
<input type="text" name="keyword[]" size="20" maxlength="80" value="" /></p>
<p><input type="submit" value="Submit!"></p>
</form>
</body>
</html>