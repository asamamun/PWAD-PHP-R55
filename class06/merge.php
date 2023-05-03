<?php
include "./fx.php";
$face = array("J", "Q", "K", "A");
$numbered = array("2", "3", "4", "5", "6", "7", "8", "9","10");
$cards = array_merge($face, $numbered);
shuffle($cards);
// echo AV($cards);
echo $cards[0];