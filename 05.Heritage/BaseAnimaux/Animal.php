<?php

class Animal
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
    
    public function manger(): void
    {
        echo ($this->nom . " mange.<br>");
    }
}
