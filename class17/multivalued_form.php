<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<iframe width="560" height="315" src="https://www.youtube.com/embed/ntNkP8X1__I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <hr>
    <form action="" method="post">
        <input type="text" name="uname" id="" placeholder="your name"> <br>
    <select name="languages[]" multiple>
 <option value="csharp">C#</option>
 <option value="javascript">JavaScript</option>
 <option value="perl">Perl</option>
 <option value="php" selected>PHP</option>
</select>
<hr>
What's your favorite programming language?<br> (check all that 
apply):<br>
 <input type="checkbox" name="favlang[]" value="csharp">C#<br>
 <input type="checkbox" name="favlang[]" value="javascript">JavaScript
<br>
 <input type="checkbox" name="favlang[]" value="perl">Perl<br>
 <input type="checkbox" name="favlang[]" value="php">PHP<br>
<input type="submit" value="get val" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        echo "<h1>Hi {$_POST['uname']}</h1>";
        //var_dump($_POST);
        echo "<h3>Your fav languages from dropdown: </h3><ol>";
        foreach ($_POST['languages'] as $key => $value) {
            echo "<li>{$value}</li>";
        }
        echo "</ol>";
        echo "<h3>Your fav languages from checkbox: </h3><ol>";
        foreach ($_POST['favlang'] as $key => $value) {
            echo "<li>{$value}</li>";
        }
        echo "</ol>";
    }
    
    ?>
</body>
</html>