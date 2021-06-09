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

switch ($_SERVER['REQUEST_URI']):
    case (preg_match('/\/animal\/(\d+)/', $_SERVER['REQUEST_URI'], $matches) ? true : false) :
        $bddAnimal = Animaux::getAnimal($matches[1]);
        include "App/Views/AnimalProfile.php";
        break;
    case ("/chats") :
        $bddAnimauxByCategorie = Animaux::getAnimauxByCategorie('Chat');
        include "App/Views/Home.php";
        break;
    case ("/chiens") :
        $bddAnimauxByCategorie = Animaux::getAnimauxByCategorie('Chien');
        include "App/Views/Home.php";
        break;
    case ("/poissons") :
        $bddAnimauxByCategorie = Animaux::getAnimauxByCategorie('Poisson');
        include "App/Views/Home.php";
        break;
    case ("/reptiles") :
        $bddAnimauxByCategorie = Animaux::getAnimauxByCategorie('Reptile');
        include "App/Views/Home.php";
        break;
    default:
        $bddAnimauxByCategorie = null;
        include "App/Views/Home.php";
endswitch;
