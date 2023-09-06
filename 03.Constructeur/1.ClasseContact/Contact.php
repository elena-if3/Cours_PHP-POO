<?php

class Contact {
    private string $nom;
    private string $prenom;
    private string $gsm;

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

    public function afficher(){
        print ("<h4>Nom: ".$this->nom."<br>Prénom: ".$this->prenom."<br>GSM: ".$this->gsm);
    }
}
