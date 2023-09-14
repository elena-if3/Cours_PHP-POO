<?php


class Film {
    private string $titre;
    private int $duree; // en minutes
    private float $prix;

    public function hydrate(array $vals) : void {
        foreach ($vals as $cle => $valeur){
            if (isset ($init[$cle])){
                $nomSet = "set" . ucfirst($cle);
                $this->$nomSet ($valeur);
            }
        }
    }

    public function __construct(array $init) // CONSTRUCTEUR TOUJOURS PUBLIQUE!!!
    {
        $this->hydrate($init);
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