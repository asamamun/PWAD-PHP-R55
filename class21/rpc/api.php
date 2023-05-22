<?php
$a = ['apple', 'orange', 'pineapple', 'pear'];
header('Content-Type: application/json');
echo json_encode($a);