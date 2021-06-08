<?php

require "App/Bdd/Bdd.php";
require "App/Bdd/Animaux.php";

require "App/Animaux/Chat.php";
require "App/Animaux/Chien.php";
require "App/Animaux/Poisson.php";
require "App/Animaux/Reptile.php";
require "App/Content/AnimalContent.php";

$chat1 = new Chat("Minou", "gris", 3, "Siamois", true, true, false);

$chat2 = new Chat("Akira", "noir & blanc", 4, "Européen", true, true, true);

$chien1 = new Chien("Pepper", "marron", 5, "Chihuahua", false, false, false);

$chien2 = new Chien("Louna", "fauve charbonnée", 9, "Berger de Shetland", true, true, true);

$poisson1 = new Poisson("Dory", "bleue et jaune", 3, "Chirurgien bleu");

$reptile1 = new Reptile("Filou", "marron et jaune", 3, "Python");

$reptile2 = new Reptile("Michou", "vert clair", 4, "Couleuvre");

$reptile3 = new Reptile("Bella", "taupe", 5, "Vipère");


$animaux = Animaux::getAllAnimaux();
$animal = Animaux::getAnimal(1);
$animauxByCategorie = Animaux::getAnimalByCategorie('Chien');

$animalsList = [];

foreach ($animal as $animal) {
  if ($animal["categorie"] == "Chat") {
    $newAnimal = new Chat($animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], 
      $animal["compatibleChat"], $animal["compatibleChien"], $animal["compatibleEnfants"]);
  } else if ($animal["categorie"] == "Chien") {
    $newAnimal = new Chien($animal["nom"], $animal["couleur"], $animal["age"], $animal["race"],
      $animal["compatibleChat"], $animal["compatibleChien"], $animal["compatibleEnfants"]);
  } else if ($animal["categorie"] == "Poisson") {
    $newAnimal = new Poisson($animal["nom"], $animal["couleur"], $animal["age"], $animal["race"]);
  } else if ($animal["categorie"] == "Reptile") {
    $newAnimal = new Reptile($animal["nom"], $animal["couleur"], $animal["age"], $animal["race"]);
  }
  array_push($animalsList, $newAnimal);
}

// var_dump($animalsList);

$createCard = new AnimalContent();
$animals = [$createCard->createCard($chat1), $createCard->createCard($chat2), $createCard->createCard($chien1), $createCard->createCard($chien2)];

include "App/templates/indexView.php";