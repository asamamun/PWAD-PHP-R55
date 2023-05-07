<?php
include "./fx.php";
$conn = new mysqli("localhost","root","");
echo AV(get_class_methods(get_class($conn)));
echo "<hr>";
echo AV(get_class_vars(get_class($conn)));