<?php

class Chat {
    private $nom;
    private $couleurPelage;
    private $age;
    private $race;
    private $cri = "miaou";

    public function __construct(string $nom, string $couleurPelage, int $age, string $race)
    {
        $this->nom = $nom;
        $this->couleurPelage = $couleurPelage;
        $this->age = $age;
        $this->race = $race;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of couleurPelage
     */
    public function getCouleurPelage()
    {
        return $this->couleurPelage;
    }

    /**
     * Set the value of couleurPelage
     */
    public function setCouleurPelage(string $couleurPelage): self
    {
        $this->couleurPelage = $couleurPelage;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of race
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set the value of race
     */
    public function setRace($race): self
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get the value of cri
     */
    public function getCri()
    {
        return $this->cri;
    }
}