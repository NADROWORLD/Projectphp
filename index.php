<?php

require "App/Animaux/Chat.php";
require "App/Animaux/Chien.php";
require "App/Content/AnimalContent.php";

$chat1 = new Chat("Minou", "gris", 3, "Siamois");

$chat2 = new Chat("Akira", "noir & blanc", 4, "Européen");

$chien1 = new Chien("Pepper", "marron", 5, "Chihuahua");

$chien2 = new Chien("Louna", "fauve charbonnée", 9, "Berger de Shetland");

$createCard = new AnimalContent();
$animals = [$createCard->createCard($chat1), $createCard->createCard($chat2), $createCard->createCard($chien1), $createCard->createCard($chien2)];

include "App/templates/indexView.php";