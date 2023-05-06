<?php
class Product
{
    private $name;
    private $sku;
    private $desc;
    private $price;
    public function __construct($n, $s, $d, $p)
    {
        $this->name = $n;
        $this->sku = $s;
        $this->desc = $d;
        $this->price = $p;
    }
    public function getname(){ return $this->name; }
    public function getdesc(){ return $this->desc; }
}
//data type hinting: $p must be an object of Product class(Product type)
function show(Product $p){
    echo "<fieldset>";
    echo "Name: " . $p->getname();
    echo "</fieldset>";
}

$p1 = new Product("Iphone","ip13001","lorem Ipsum","800");
$p2 = new Product("Samsung","ssg001","lorem Ipsum","799");
show($p1);
show($p2);

