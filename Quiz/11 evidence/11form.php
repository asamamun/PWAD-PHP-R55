<?php
class Student
{
    public $id;
    public $name;
    public $batch;
    static public $filearr;
/*     public function __construct()
    {
        self::$filearr = file("student.txt");
    } */
    function loadfile(){
        self::$filearr = file("student.txt"); 
    }
    function result($id)
    {
        $found = false;
        foreach (self::$filearr as $line) {
            $parts  = explode(",", $line);
            if ($parts[0] == $id) {
                echo "Student ID: " . $parts[0] . "<br>";
                echo "Student Name: " . $parts[1] . "<br>";
                echo "Student Batch: " . $parts[2] . "<br>";
                $found = true;
                break;
            }
        }
        if(!$found) echo "No info available";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h3>Create a class named student where fields are id, name, batch and one method result which will take id as parameter and search the corresponding result from a file and print result. Must use constructor to initialize the data and print a result.
</h3>
<h3>
Create a class named student where fields are id, name, batch and one method result which will take id as
parameter and search the corresponding result from a file and print result. Must use constructor to initialize
the data and print a result
</h3>
<hr>
    <form action="" method="post">
        <input type="text" placeholder="user id, ex. 1" name="userid" required>
        <input type="submit" value="Show" name="show">
    </form>
    <hr>
    <?php
    if (isset($_POST['show'])) {
        $s = new Student();
        $s->loadfile();
        $s->result($_POST['userid']);
   }
    ?>
</body>

</html>
