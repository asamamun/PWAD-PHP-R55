<?php
// $all_lines = file("test.txt");
$all_lines = file("https://mzamin.com/");

foreach ($all_lines as $value) {
    echo $value;
}