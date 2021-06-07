<?php

class Chien {
    private $nom;
    private $couleur;
    private $age;
    private $race;

    public function __construct(string $nom, string $couleur, int $age, string $race, bool $compatibleChat, bool $compatibleEnfants)
    {
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->age = $age;
        $this->race = $race;
        $this->compatibleChat = $compatibleChat;
        $this->compatibleEnfants = $compatibleEnfants;
    }

    public function getNom () 
    {
        return $this->nom;
    }
    public function setNom (string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of couleur
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     */
    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

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
     * Get the value of compatibleChat
     */ 
    public function getCompatibleChat()
    {
        return $this->compatibleChat;
    }

    /**
     * Set the value of compatibleChat
     *
     * @return  self
     */ 
    public function setCompatibleChat($compatibleChat)
    {
        $this->compatibleChat = $compatibleChat;

        return $this;
    }

    /**
     * Get the value of compatibleEnfants
     */ 
    public function getCompatibleEnfants()
    {
        return $this->compatibleEnfants;
    }

    /**
     * Set the value of compatibleEnfants
     *
     * @return  self
     */ 
    public function setCompatibleEnfants($compatibleEnfants)
    {
        $this->compatibleEnfants = $compatibleEnfants;

        return $this;
    }
}