<?php

class ContactNew {

    // les propriétés sont fixées dans la signature du constructeur
    public function __construct(private string $nom, 
                                private string $prenom, 
                                private string $gsm)
    {
        // conditions événtuelles
    }


    public function afficher(){
        print ("<h4>Nom: ".$this->nom."<br>Prénom: ".$this->prenom."<br>GSM: ".$this->gsm);
    }
}
