<?php


class Film {
    private string $titre;
    private int $duree; // en minutes
    private float $prix;

    public function __construct(string $titre, int $duree, float $prix) // CONSTRUCTEUR TOUJOURS PUBLIQUE!!!
    {
        $this->titre = $titre;
        $this->duree = $duree;
        if ($prix >= 0){
            $this->prix = $prix;
        }
        else{
            throw new Exception("Le prix doit être positif.");
        }
    }

    public function getTitre(){
        return $this->titre;
    }

    public function getDuree(){
        return $this->duree;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function setTitre(string $titre){
        $this->titre = $titre;
    }

    public function setDuree(int $duree){
        $this->duree = $duree;
    }

    public function setPrix(float $prix){
        if ($prix >= 0){
            $this->prix = $prix;
        }
        else{
            throw new Exception("Le prix doit être positif.");
        }
    }

    public function afficher (){
        print ("<h4>Titre: " . $this->titre . "<br>Durée: " . $this->duree . "</h4>");
    }
}