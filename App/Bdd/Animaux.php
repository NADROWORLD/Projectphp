<?php

class Animaux extends Bdd {

  public static function getAllAnimaux() {
    return Bdd::getInstance()->conn->query('SELECT *, animaux.nom as nom, categories.nom as categorie 
      FROM animaux INNER JOIN categories ON categories.id = animaux.id_categorie')->fetchAll();
  }

  public static function getAnimal(int $idAnimal) {
    $req = sprintf('SELECT *, animaux.nom as nom, categories.nom as categorie FROM animaux 
      INNER JOIN categories ON categories.id = animaux.id_categorie
      WHERE animaux.id = %d', $idAnimal);
    return Bdd::getInstance()->conn->query($req)->fetchAll();
  }

  public static function getAnimalByCategorie(string $categorieName) {
    $req = sprintf("SELECT *, animaux.nom as nom, categories.nom as categorie FROM animaux
      INNER JOIN categories ON categories.id = animaux.id_categorie
      WHERE categories.nom = '%s'", $categorieName);
    return Bdd::getInstance()->conn->query($req)->fetchAll();
  }
}
