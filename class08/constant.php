<?php
class Cart{
    //constant
    const VAT = 0.05;
    //method
    public function totalWithVat($total){
        return $total + $total * Cart::VAT;
    }
}
//object
$c = new Cart();
echo $c -> totalWithVat(1000);
echo "<br>";
echo Cart::VAT;