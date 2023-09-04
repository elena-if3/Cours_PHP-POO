<?php

class Personne
{
    private string $nom;
    private string $prenom;

    // association
    private array $passeports;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
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

    // rajouter un passeport (rajouter les éléments de la collection)
    public function addPassport(Passeport $passeport)
    {
        // lien vers *
        $this->passeports[] = $passeport;
        // dans l'autre sense -> lien vers 1
        $passeport->setPersonne($this);
    }

    // afficher tous les passeports
    public function afficherPasseports()
    {
        foreach ($this->passeports as $unPasseport) {
            $unPasseport->display();
        }
    }
}
