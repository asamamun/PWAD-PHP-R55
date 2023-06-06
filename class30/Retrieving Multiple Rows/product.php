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
   CREATE PROCEDURE get_products()
 SELECT id,sku ,name, description, price, image FROM products ORDER by name;
   </pre> 
   <?php
 // Instantiate the mysqli class
 $db = new mysqli("localhost", "root", "", "r55_php");
 // Execute the stored procedure
 $result = $db->query("CALL get_products()");
 // Loop through the results
 while (list($id,$sku ,$name, $d, $p, $i) = $result->fetch_row()) {
    //apply css to make it looks better
 echo "Product Id:{$id} <br>Sku: {$sku} <br> Name: {$name}  <br>Description: {$d} <br> Price: {$p} <br> Image: {$i} <hr> ";
 }
?>
</body>
</html>