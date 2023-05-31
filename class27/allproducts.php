<?php
 $mysqli = new mysqli('localhost', 'root', '','r55_php');
 // Create the query
 $query = 'SELECT sku, name, price FROM products ORDER by name';
 // Send the query to MySQL
 $result = $mysqli->query($query, MYSQLI_STORE_RESULT);
 //num_rows works only with select statement results
 echo "<h3>Total {$result->num_rows} products</h3>";
 // Iterate through the result set
 while(list($sku, $name, $price) = $result->fetch_row())
 //printf("(%s) %s: \$%s <br />", $sku, $name, $price);
 echo "({$sku}) {$name}: &#2547;{$price} <br>";
 //very important code programmers forget to add
 $result->free();
 $mysqli->close();
?>