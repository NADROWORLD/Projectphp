<?php

require "App/Animaux/Chat.php";
require "App/Animaux/Chien.php";
require "App/Content/AnimalContent.php";

echo "<br>";
$chat1 = new Chat("Minou", "gris", 3, "Siamois");
var_dump($chat1);
echo "<br>";
$chat2 = new Chat("Akira", "noir & blanc", 4, "Européen");
var_dump($chat2);
echo "<br>";
$chien1 = new Chien("Pepper", "marron", 5, "Chihuahua");
var_dump($chien1);
echo "<br>";
$chien2 = new Chien("Louna", "fauve charbonnée", 9, "Berger de Shetland");
var_dump($chien2);
echo "<br>";

$createCard = new AnimalContent();
$animals = [$createCard->createCard($chat1), $createCard->createCard($chat2), $createCard->createCard($chien1), $createCard->createCard($chien2)];


include "App/templates/indexView.php";