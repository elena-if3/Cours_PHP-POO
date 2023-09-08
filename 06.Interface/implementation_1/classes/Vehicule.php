<?php

abstract class Vehicule
{
    private string $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    /**
     * Get the value of code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function afficher()
    {
        print("<br>J'ai le code " . $this->code . ".");
    }

    abstract public function claxonner(): void;
}
