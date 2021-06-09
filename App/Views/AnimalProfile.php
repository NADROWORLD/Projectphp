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
?>
<div class="container-sm">
    <img src='https://fakeimg.pl/286x180/?text=<?php echo $newAnimal->getNom(); ?>' class='card-img-top' alt='...'>
    <h5 class='card-title'>Nom: <?php echo $newAnimal->getNom(); ?></h5>
    <h5 class='card-title'>Couleur: <?php echo $newAnimal->getCouleur(); ?></h5>
    <h5 class='card-title'>Age: <?php echo $newAnimal->getAge(); ?></h5>
    <p class='card-text'><?php echo $newAnimal->getDescription(); ?></p>
    <?php if ($newAnimal->getCompatibleChat() === false): ?>
    <p><?php echo $newAnimal->getNom(); ?> ne peut pas vivre en compagnie de chats</p>
    <?php endif ?>
    <?php if ($newAnimal->getCompatibleChien() === false): ?>
    <p><?php echo $newAnimal->getNom(); ?> ne peut pas vivre en compagnie de chiens</p>
    <?php endif ?>
    <?php if ($newAnimal->getCompatibleEnfants() === false): ?>
    <p><?php echo $newAnimal->getNom(); ?> ne peut pas vivre avec des enfants</p>
    <?php endif ?>
</div>
