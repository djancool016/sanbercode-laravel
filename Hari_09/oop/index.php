<?php
require("animal.php");

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo $sheep->legs; // 4
echo $sheep->cold_blooded; // "no"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())


// index.php
$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"

echo "<br><br>Release 1<br><br>";
echo "Name : {$sheep->get_name()}<br>";
echo "Legs : {$sheep->legs}<br>";
echo "Cold Bloded : {$sheep->cold_blooded}<br>";

echo "<br>";
echo "Name : {$kodok->get_name()}<br>";
echo "Legs : {$kodok->legs}<br>";
echo "Cold Bloded : {$kodok->cold_blooded}<br>";
echo "Jump : {$kodok->jump}<br>";

echo "<br>";
echo "Name : {$sungokong->get_name()}<br>";
echo "Legs : {$sungokong->legs}<br>";
echo "Cold Bloded : {$sungokong->cold_blooded}<br>";
echo "Yell : {$sungokong->yell}<br>";
?>