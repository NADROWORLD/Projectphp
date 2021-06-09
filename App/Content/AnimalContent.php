<?php

class AnimalContent {

  public function createCard($animal) { ?>
    <div class='card' style='width: 18rem; margin: 0 1rem 1rem;'>
      <img src='https://fakeimg.pl/286x180/?text=<?php echo $animal->getNom(); ?>' class='card-img-top' alt='...'>
      <div class='card-body'>
          <h5 class='card-title'>Nom: <?php echo $animal->getNom(); ?></h5>
          <h5 class='card-title'>Couleur: <?php echo $animal->getCouleur(); ?></h5>
          <h5 class='card-title'>Age: <?php echo $animal->getAge(); ?></h5>
          <p class='card-text'><?php echo $animal->getDescription(); ?></p>
          <?php if(is_a($animal, "Chien") || is_a($animal, "Chat")): ?>
            <?php if ($animal->getCompatibleChat() === false): ?>
                <p><?php echo $animal->getNom(); ?> ne peut pas vivre en compagnie de chats</p>
            <?php endif ?>
                <?php if ($animal->getCompatibleChien() === false): ?>
                <p><?php echo $animal->getNom(); ?> ne peut pas vivre en compagnie de chiens</p>
            <?php endif ?>
            <?php if ($animal->getCompatibleEnfants() === false): ?>
                <p><?php echo $animal->getNom(); ?> ne peut pas vivre avec des enfants</p>
            <?php endif ?>
            <?php endif ?>
          <a href=<?= "/animal/" . $animal->getId() ?> class='btn btn-primary'>Go somewhere</a>
      </div>
  </div> 
  <?php }

  public function createProfile($animal) { ?>
    <div class="container-sm">
        <img src='https://fakeimg.pl/286x180/?text=<?php echo $animal->getNom(); ?>' class='card-img-top' alt='...'>
        <h5 class='card-title'>Nom: <?php echo $animal->getNom(); ?></h5>
        <h5 class='card-title'>Couleur: <?php echo $animal->getCouleur(); ?></h5>
        <h5 class='card-title'>Age: <?php echo $animal->getAge(); ?></h5>
        <p class='card-text'><?php echo $animal->getDescription(); ?></p>
        <?php if(is_a($animal, "Chien") || is_a($animal, "Chat")): ?>
        <?php if ($animal->getCompatibleChat() === false): ?>
            <p><?php echo $animal->getNom(); ?> ne peut pas vivre en compagnie de chats</p>
        <?php endif ?>
            <?php if ($animal->getCompatibleChien() === false): ?>
            <p><?php echo $animal->getNom(); ?> ne peut pas vivre en compagnie de chiens</p>
        <?php endif ?>
        <?php if ($animal->getCompatibleEnfants() === false): ?>
            <p><?php echo $animal->getNom(); ?> ne peut pas vivre avec des enfants</p>
        <?php endif ?>
        <?php endif ?>
    </div> 
  <?php }
}