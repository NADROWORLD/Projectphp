<?php
require "App/Bdd/Bdd.php";
require "App/Bdd/Animaux.php";

require "App/Animaux/Chat.php";
require "App/Animaux/Chien.php";
require "App/Animaux/Poisson.php";
require "App/Animaux/Reptile.php";

include "App/templates/head/head.php";
include "App/templates/head/header.php";
include "App/templates/head/footer.php";
require "App/Content/AnimalContent.php";

$bddAnimaux = Animaux::getAllAnimaux();
$bddAnimal = Animaux::getAnimal(1);
$bddAnimauxByCategorie = Animaux::getAnimalByCategorie('Chien');

foreach ($bddAnimaux as $animal) {
  if ($animal["categorie"] == "Chat") {
    $newAnimal = new Chat($animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], $animal["description"],
      $animal["compatibleChat"], $animal["compatibleChien"], $animal["compatibleEnfants"]);
  } else if ($animal["categorie"] == "Chien") {
    $newAnimal = new Chien($animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], $animal["description"],
      $animal["compatibleChat"], $animal["compatibleChien"], $animal["compatibleEnfants"]);
  } else {
    continue;
  }

  $createCard = new AnimalContent();
  $createCard->createCard($newAnimal);
}

$animals = [];
include "App/templates/indexView.php";