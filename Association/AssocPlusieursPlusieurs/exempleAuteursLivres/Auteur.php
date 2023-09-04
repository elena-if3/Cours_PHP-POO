<?php

class Auteur
{
    private string $nom;
    private string $prenom;
    private string $nationalite;

    // association
    public array $livres;

    // constructeur
    public function __construct(string $nom, string $prenom, string $nationalite)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->nationalite = $nationalite;
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

    /**
     * Get the value of prenom
     *
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param string $prenom
     *
     * @return self
     */
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nationalite
     *
     * @return string
     */
    public function getNationalite(): string
    {
        return $this->nationalite;
    }

    /**
     * Set the value of nationalite
     *
     * @param string $nationalite
     *
     * @return self
     */
    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get the value of livres
     *
     * @return array
     */
    public function getLivres(): array
    {
        return $this->livres;
    }

    /**
     * Set the value of livres
     *
     * @param array $livres
     *
     * @return self
     */
    public function setLivres(array $livres): self
    {
        $this->livres = $livres;

        return $this;
    }

    // rajouter de livres écrits par l'auteur
    public function addBook(Livre $livre)
    {
        $this->livres[] = $livre;
        $livre->auteurs[] = $this;
    }
}
