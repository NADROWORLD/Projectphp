<?php 
switch($bddAnimal["id_categorie"]){
    case(1):
        $newAnimal = new Chat($bddAnimal["id"], $bddAnimal["nom"], $bddAnimal["couleur"], $bddAnimal["age"], $bddAnimal["race"], $bddAnimal["description"],
        $bddAnimal["compatibleChat"], $bddAnimal["compatibleChien"], $bddAnimal["compatibleEnfants"]);
        break;
    case(2):
        $newAnimal = new Chien($bddAnimal["id"], $bddAnimal["nom"], $bddAnimal["couleur"], $bddAnimal["age"], $bddAnimal["race"], $bddAnimal["description"],
        $bddAnimal["compatibleChat"], $bddAnimal["compatibleChien"], $bddAnimal["compatibleEnfants"]);
        break;
    case(3):
        $newAnimal = new Poisson($bddAnimal["id"], $bddAnimal["nom"], $bddAnimal["couleur"], $bddAnimal["age"], $bddAnimal["race"], $bddAnimal["description"]);
        break;
    case(4):
        $newAnimal = new Reptile($bddAnimal["id"], $bddAnimal["nom"], $bddAnimal["couleur"], $bddAnimal["age"], $bddAnimal["race"], $bddAnimal["description"]);
        break;
    default:
        break;
}
$createProfile = new AnimalContent();
$createProfile->createProfile($newAnimal);

include "App/templates/animalProfileView.php";
?>

