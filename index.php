<?php

require "App/Animaux/Chat.php";
require "App/Animaux/Chien.php";
require "App/Animaux/Serpent.php";
require "App/Content/AnimalContent.php";

$chat1 = new Chat("Minou", "gris", 3, "Siamois", true, true, false);

$chat2 = new Chat("Akira", "noir & blanc", 4, "Européen", true, true, true);

$chien1 = new Chien("Pepper", "marron", 5, "Chihuahua", false, false, false);

$chien2 = new Chien("Louna", "fauve charbonnée", 9, "Berger de Shetland", true, true, true);

$serpent1 = new Serpent("Filou", "marron et jaune", 3, "Python");

$serpent2 = new Serpent("Michou", "vert clair", 4, "Couleuvre");

$serpent3 = new Serpent("Bella", "taupe", 5, "Vipère");

$createCard = new AnimalContent();
$animals = [$createCard->createCard($chat1), $createCard->createCard($chat2), $createCard->createCard($chien1), $createCard->createCard($chien2)];

include "App/templates/indexView.php";