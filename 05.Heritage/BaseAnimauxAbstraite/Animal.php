<?php

abstract class Animal
{
    protected string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }
    
    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }
    
    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        
        return $this;
    }
    
    // Cette méthode DOIT être définie dans toutes les classes qui héritent.
    // Ici il n'y aura que la signature.
    public abstract function manger();

}
