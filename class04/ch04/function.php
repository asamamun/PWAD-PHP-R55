<?php
//user defined 
function displayDate(){
    return date("Y-m-d H:i:s") . "<br>";
}
echo displayDate();
sleep(1);
echo displayDate();
//list function: set array values into variables
function getcolors(){
return ["red","blue","green","yellow","reddish","purple"];
}

 list($color1, $color2, $color3) = getcolors();
 echo $color3 . "<br>";
 ?>
 <hr>
 <?php
 function retrieveUserProfile()
 {
/*     $user = [
        '1'=>"Jason Gilmore",
    ]; */
 $user[] = "Jason Gilmore";
 $user[] = "jason@example.com";
 $user[] = "English";
 $user[] = "IDB";
 return $user;
 }
 list($name, $email, $language) = retrieveUserProfile();
 echo "Name: {$name}, email: {$email}, language: {$language}";

 $num=[];
    for ($i=100; $i < 200; $i++) { 
        $num[] = $i;
        }
        print_r($num);
?> <hr> <?php
        function calculateSalesTax(float $price, float $tax=0.05)
        {
         return $price + ($price * $tax);
        }
        echo calculateSalesTax(100,0.10);