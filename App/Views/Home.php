<?php 

foreach ($bddAnimaux as $animal) {
  switch($animal["categorie"]){
    case("Chat"):
      $newAnimal = new Chat($animal["id"], $animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], $animal["description"],
      $animal["compatibleChat"], $animal["compatibleChien"], $animal["compatibleEnfants"]);
      break;
    case("Chien"):
      $newAnimal = new Chien($animal["id"], $animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], $animal["description"],
      $animal["compatibleChat"], $animal["compatibleChien"], $animal["compatibleEnfants"]);
      break;
    case("Poisson"):
      $newAnimal = new Poisson($animal["id"], $animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], $animal["description"]);
      break;
    case("Reptile"):
      $newAnimal = new Reptile($animal["id"], $animal["nom"], $animal["couleur"], $animal["age"], $animal["race"], $animal["description"]);
      break;
    default:
      break;
  }
  $createCard = new AnimalContent();
  $createCard->createCard($newAnimal);
}
$animals = [];
include "App/templates/indexView.php";