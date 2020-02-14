<?php
require("animal.php");
require("frog.php");
require("ape.php");

$sheep = new Animal("shaun");

echo $sheep->name."<br>"; // "shaun"
echo $sheep->legs."<br>"; // 2
echo $sheep->cold_blooded."<br>"; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
echo "============================<br>";

// index.php
$sungokong = new Ape("kera sakti");
echo $sungokong->name."<br>"; // "kera sakti"
echo $sungokong->legs."<br>"; // 2
echo $sungokong->cold_blooded."<br>"; // false
$sungokong->yell(); // "Auooo"

echo "============================<br>";

$kodok = new Frog("buduk");
echo $kodok->name."<br>"; // "buduk"
echo $kodok->cold_blooded."<br>"; // false
$kodok->setLegs(4); 
echo $kodok->getLegs()."<br>";// 4
$kodok->jump(); // "hop hop"
?>