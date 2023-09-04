<?php
// include_once "./Repertoire.php";

class Contact {
    private string $nom;
    private string $prenom;
    private string $gsm;

    // association
    private Repertoire $repertoire;

    public function __construct(string $valNom, string $valPrenom, string $valGsm)
    {
        $this->nom = $valNom;
        $this->prenom = $valPrenom;
        $this->gsm = $valGsm;
    }

    public function setNom(string $nouveauNom):self
    {
        $this->nom = $nouveauNom;
        return $this;
    }

    public function getNom():string
    {
        return $this->nom;
    }

    public function setPrenom(string $nouveauPrenom):self
    {
        $this->nom = $nouveauPrenom;
        return $this;
    }

    public function getPrenom():string
    {
        return $this->prenom;
    }

    /**
     * Get the value of gsm
     *
     * @return string
     */
    public function getGsm(): string
    {
        return $this->gsm;
    }

    /**
     * Set the value of gsm
     *
     * @param string $gsm
     *
     * @return self
     */
    public function setGsm(string $gsm): self
    {
        $this->gsm = $gsm;

        return $this;
    }

    /**
     * Get the value of repertoire
     *
     * @return Repertoire
     */
    public function getRepertoire(): Repertoire
    {
        return $this->repertoire;
    }

    /**
     * Set the value of repertoire
     *
     * @param Repertoire $repertoire
     *
     * @return self
     */
    public function setRepertoire(Repertoire $repertoire): self
    {
        $this->repertoire = $repertoire;

        return $this;
    }


    public function afficher(){
        print ("<h4>Nom: ".$this->nom."<br>Prénom: ".$this->prenom."<br>GSM: ".$this->gsm);
    }

}
