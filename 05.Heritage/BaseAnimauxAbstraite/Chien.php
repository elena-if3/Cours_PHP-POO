<?php

class Chien extends Animal
{
    protected bool $garde;

    public function __construct(string $nom, bool $garde = false)
    {
        parent::__construct($nom);
        $this->garde = $garde;
    }

    /**
     * Get the value of garde
     *
     * @return bool
     */
    public function getGarde(): bool
    {
        return $this->garde;
    }

    /**
     * Set the value of garde
     *
     * @param bool $garde
     *
     * @return self
     */
    public function setGarde(bool $garde): self
    {
        $this->garde = $garde;

        return $this;
    }

    public function aboyer(): void
    {
        echo ($this->nom . " aboye.<br>");
    }

    public function jouer(): void
    {
        echo ($this->nom . " joue.<br>");
    }
    
    public function manger(): void
    {
        echo ($this->nom . " mange des os.<br>");
    }
}
