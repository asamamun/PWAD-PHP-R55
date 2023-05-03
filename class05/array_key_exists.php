<?php
include "countryArr.php";
if(array_key_exists("BD", $countryList)){
    echo $countryList['BD'];
}
else{
    echo "no have";
}