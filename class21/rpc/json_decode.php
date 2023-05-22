<?php
$json ='["apple","orange","pineapple","pear"]';
$original_array = json_decode($json);
foreach ($original_array as $key => $value) {
    echo $value . ",";
}