<?php

class AnimalContent {

  public function createCard($animal) { ?>
    <div class='card' style='width: 18rem; margin: 0 1rem 1rem;'>
      <img src='https://fakeimg.pl/286x180/?text=<?php echo $animal->getNom(); ?>' class='card-img-top' alt='...'>
      <div class='card-body'>
          <h5 class='card-title'>Nom: <?php echo $animal->getNom(); ?></h5>
          <h5 class='card-title'>Couleur: <?php echo $animal->getCouleur(); ?></h5>
          <h5 class='card-title'>Age: <?php echo $animal->getAge(); ?></h5>
          <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <?php if ($animal->getCompatibleChat() === false): ?>
            <p><?php echo $animal->getNom(); ?> ne peut pas vivre en compagnie de chats</p>
          <?php endif ?>
            <?php if ($animal->getCompatibleChien() === false): ?>
            <p><?php echo $animal->getNom(); ?> ne peut pas vivre en compagnie de chiens</p>
          <?php endif ?>
          <?php if ($animal->getCompatibleEnfants() === false): ?>
            <p><?php echo $animal->getNom(); ?> ne peut pas vivre avec des enfants</p>
          <?php endif ?>
          <a href='#' class='btn btn-primary'>Go somewhere</a>
      </div>
  </div> 
  <?php }
}