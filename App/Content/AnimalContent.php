<?php

class AnimalContent {

  public function createCard($animal) { ?>
    <div class="card">
      <img src="https://fakeimg.pl/286x180/?text=<?php echo $animal->getNom(); ?>" class="card-img-top" alt="...">
      <div class="card-body">
          <h5 class="card-title">Nom: <?php echo $animal->getNom(); ?></h5>
          <h5 class="card-title">Couleur: <?php echo $animal->getCouleur(); ?></h5>
          <h5 class="card-title">Age: <?php echo $animal->getAge(); ?></h5>
          <p class="card-text"><?php echo $animal->getDescription(); ?></p>
          <?php if(is_a($animal, "Chien") || is_a($animal, "Chat")): ?>
            <?php if ($animal->getCompatibleChat() === false): ?>
                <p><i class="fa fa-sign-in"></i> Ne peut pas vivre en compagnie de chats</p>
            <?php endif ?>
                <?php if ($animal->getCompatibleChien() === false): ?>
                <p><i class="fa fa-sign-in"></i> Ne peut pas vivre en compagnie de chiens</p>
            <?php endif ?>
            <?php if ($animal->getCompatibleEnfants() === false): ?>
                <p><i class="fa fa-sign-in"></i> Ne peut pas vivre avec des enfants</p>
            <?php endif ?>
            <?php endif ?>
          <a href=<?= "/animal/" . $animal->getId() ?> class="btn btn-primary"><?= "En savoir plus sur " . $animal->getNom() ?></a>
      </div>
  </div> 
  <?php }

  public function createProfile($animal) { ?>
    <div class="container-sm container">
        <div class="column  align-items-center">
            <div class="row-sm">
                <h1 class="display-4">
                    <?php echo $animal->getNom(); ?>
                </h1>
            </div>
            <div class="row-sm">
                <img src="https://fakeimg.pl/286x180/?text=<?php echo $animal->getNom(); ?>" class="card-img-top img-profile" alt="...">
            </div>
            <div class="row-sm justify-content-md-center p-5">
                <ul class="list-group">
                    <li class="list-group-item">
                        Couleur: <?php echo $animal->getCouleur(); ?>
                    </li>
                    <li class="list-group-item">
                        Age: <?php echo $animal->getAge(); ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $animal->getDescription(); ?>
                    </li>
                    <?php if(is_a($animal, "Chien") || is_a($animal, "Chat")): ?>
                        <?php if ($animal->getCompatibleChat() === false): ?>
                            <li class="list-group-item">
                                <i class="fa fa-sign-in"></i> Ne peut pas vivre en compagnie de chats
                            </li>
                        <?php endif ?>
                        <?php if ($animal->getCompatibleChien() === false): ?>
                            <li class="list-group-item">
                                <i class="fa fa-sign-in"></i> Ne peut pas vivre en compagnie de chiens
                            </li>
                        <?php endif ?>
                        <?php if ($animal->getCompatibleEnfants() === false): ?>
                            <li class="list-group-item">
                                <i class="fa fa-sign-in"></i> Ne peut pas vivre avec des enfants
                            </li>
                        <?php endif ?>
                    <?php endif ?>
                </ul>
            </div>
            <div class="row-sm bg-primary mb-5 p-5">
                <blockquote class="text-white">Les conditions d'adoption
                    En adoptant ?? KIRA SPA, vous acceptez de participer aux frais engendr??s par la prise en charge de l???animal dans le cadre d???une adoption responsable dont les soins, l???h??bergement, la nourriture, la vaccination, la st??rilisation, l'??ducation... Vous trouverez aussi aupr??s de nos ??quipes des professionnels capables de vous donner les meilleurs conseils pour accueillir votre nouveau compagnon.
                    Par votre participation financi??re, vous continuerez ?? faire grandir notre mouvement de solidarit?? envers les animaux abandonn??s et maltrait??s.</div>
            </blockquote>
            </div>
    </div>
  <?php }
}