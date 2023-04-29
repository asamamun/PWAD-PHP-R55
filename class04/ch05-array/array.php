<?php
ini_set("display_errors",0);
//numeric array
$a = [4,5,6];
$aa = array(4,5,6);
$b []=4;
$b [10]=5;
$b []=6;
print_r($b);
//associative array
//double arrow operator: =>
//object operator:  ->
$engToBangla = [
    'january'=> "জানুয়ারী",
    'february'=> "ফেব্রুয়ারি",
    'march' => "মার্চ",
    'april'=> "এপ্রিল",
    'may'=> "মে",
    'june'=> "জুন",
    'july'=> "জুলাই",
    'august'=> "আগস্ট",
    'september'=>"সেপ্টেম্বর",
    'october'=> "অক্টোবর",
    'november'=> "নভেম্বর",
    "december"=> "ডিসেম্বর"
];
$states = [
    "Ohio" => ["population" => "11,353,140", "capital" => "Columbus"],
    "Nebraska" => ["population" => "1,711,263", "capital" => "Omaha"]
   ];
  // echo $states['Ohio']['capital'];
  print_r($states);//print_r works only for array
  var_dump($states);//var_dump works for any types of variables

  function person() {
    return ['Frank M. Kromann', 'frank@example.com', 'Author'];
   }
//    $p = person();
//    echo $p[1];
   echo person()[1];
   list($a,$b,$c) = person();
   echo $a;