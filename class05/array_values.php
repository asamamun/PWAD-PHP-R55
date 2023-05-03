<?php
include "./countryArr.php";
include "./fx.php";
$allKeys = array_values($countryList);
echo AV($allKeys);