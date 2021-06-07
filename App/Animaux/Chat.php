<?php

class Chat {
    private $nom;
    private $couleur;
    private $age;
    private $race;
    private $compatibleChat;
    private $compatibleChien;
    private $compatibleEnfants;

    public function __construct(string $nom, string $couleur, int $age, string $race, bool $compatibleChat, bool $compatibleChien, bool $compatibleEnfants)
    {
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->age = $age;
        $this->race = $race;
        $this->compatibleChat = $compatibleChat;
        $this->compatibleChien = $compatibleChien;
        $this->compatibleEnfants = $compatibleEnfants;
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
     * Get the value of compatibleChien
     */ 
    public function getCompatibleChien()
    {
<<<<<<< HEAD
        return $this->compatibleChien;
=======
            return $this->compatibleChien;
>>>>>>> main
    }

    /**
     * Set the value of compatibleChien
     *
     * @return  self
     */ 
    public function setCompatibleChien($compatibleChien)
    {
<<<<<<< HEAD
        $this->compatibleChien = $compatibleChien;

        return $this;
=======
            $this->compatibleChien = $compatibleChien;

            return $this;
>>>>>>> main
    }

    /**
     * Get the value of compatibleEnfants
     */ 
    public function getCompatibleEnfants()
    {
<<<<<<< HEAD
        return $this->compatibleEnfants;
=======
            return $this->compatibleEnfants;
>>>>>>> main
    }

    /**
     * Set the value of compatibleEnfants
     *
     * @return  self
     */ 
    public function setCompatibleEnfants($compatibleEnfants)
    {
<<<<<<< HEAD
        $this->compatibleEnfants = $compatibleEnfants;
=======
            $this->compatibleEnfants = $compatibleEnfants;

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
>>>>>>> main

        return $this;
    }
}