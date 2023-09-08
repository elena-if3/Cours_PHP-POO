<?php

class Medecin
{
    private string $inami;
    private string $nom;
    private static string $serment = "Traiter correctement les patients.";

    public function __construct(string $inami, string $nom)
    {
        $this->inami = $inami;
        $this->nom = $nom;
    }

    /**
     * Get the value of inami
     *
     * @return string
     */
    public function getInami(): string
    {
        return $this->inami;
    }

    /**
     * Set the value of inami
     *
     * @param string $inami
     *
     * @return self
     */
    public function setInami(string $inami): self
    {
        $this->inami = $inami;

        return $this;
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

    // Set the value of serment
    public static function setSerment(string $serment): void
    {
        // init static
        self::$serment = $serment;
    }

    /**
     * Get the value of serment
     *
     * @return string
     */
    public static function getSerment(): string
    {
        return self::$serment;
    }
}
