<?php

class Chat {
    private $nom;
    private $couleur;
    private $age;
    private $race;

    public function __construct(string $nom, string $couleur, int $age, string $race, boolean $compatibleChien, boolean $compatibleEnfants)
    {
        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->age = $age;
        $this->race = $race;
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
    public function getcouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     */
    public function setcouleur(string $couleur): self
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
                return $this->compatibleChien;
        }

        /**
         * Set the value of compatibleChien
         *
         * @return  self
         */ 
        public function setCompatibleChien($compatibleChien)
        {
                $this->compatibleChien = $compatibleChien;

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