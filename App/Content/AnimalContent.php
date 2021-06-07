<?php

class AnimalContent {

    public function createCard($animal) {
        return "
        <div class='card' style='width: 18rem;'>
            <img src='https://fakeimg.pl/286x180/?text=". $animal->getNom()."' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>Nom: ".$animal->getNom()."</h5>
                <h5 class='card-title'>Couleur: ".$animal->getCouleurPelage()."</h5>
                <h5 class='card-title'>Age: ".$animal->getAge()."</h5>
                <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href='#' class='btn btn-primary'>Go somewhere</a>
            </div>
        </div>";
    }
}