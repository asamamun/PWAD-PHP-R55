<?php
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
// echo date("Y-m-d H:i:s");
echo date("F");
echo $engToBangla[ strtolower(date('F')) ];