<?php

// Créez une classe CompteBancaire qui contient les informations et les opérations basiques d'un compte bancaire. 
// Il faut pouvoir obtenir le solde du compte, enlever et rajouter un montant d'argent. On peut aussi bloquer et débloquer le compte.

class CompteBancaire {
    private string $numero;
    private string $titulaire;
    private string $iban;
    private float $solde;
    private bool $compteActif;

    public function __construct(string $numero, string $titulaire, string $iban, float $solde, bool $compteActif)
    {
        $this->numero = $numero;
        $this->titulaire = $titulaire;
        $this->iban = $iban;
        $this->solde = $solde;
        $this->compteActif = $compteActif;
    }
    
    /**
     * Get the value of numero
     *
     * @return string
     */
    public function getNumero(): string
    {
        return $this->numero;
    }
    
    /**
     * Set the value of numero
     *
     * @param string $numero
     *
     * @return self
     */
    public function setNumero(string $numero): self
    {
        $this->numero = $numero;
        
        return $this;
    }

    /**
     * Get the value of titulaire
     *
     * @return string
     */
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    /**
     * Set the value of titulaire
     *
     * @param string $titulaire
     *
     * @return self
     */
    public function setTitulaire(string $titulaire): self
    {
        $this->titulaire = $titulaire;
        
        return $this;
    }
    
    /**
     * Get the value of iban
     *
     * @return string
     */
    public function getIban(): string
    {
        return $this->iban;
    }
    
    /**
     * Set the value of iban
     *
     * @param string $iban
     *
     * @return self
     */
    public function setIban(string $iban): self
    {
        $this->iban = $iban;
        
        return $this;
    }
    
    /**
     * Get the value of solde
     *
     * @return float
     */
    public function getSolde(): float
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @param float $solde
     *
     * @return self
     */
    public function setSolde(float $solde): self
    {
        $this->solde = $solde;
        
        return $this;
    }

    /**
     * Get the value of compteActif
     */
    public function getCompteActif()
    {
        return $this->compteActif;
    }

    /**
     * Set the value of compteActif
     */
    public function setCompteActif($compteActif): self
    {
        $this->compteActif = $compteActif;

        return $this;
    }
    
    // Méthodes
    
    public function afficher(){
        print("<h4>Compte n°: ".$this->numero."<br>Titulaire: ".$this->titulaire."<br>IBAN: ".$this->iban."<br>Solde: ".$this->solde."</h4>");
    }

    public function enleverMontant($montant):self{
        if ($montant <= $this->solde){
            $this->solde -= $montant;
            return $this;
        }
        else{
            echo '<script>alert("Le solde actuel n\'est pas suffisant.")</script>';
            return $this;
        }
    }

    public function rajouterMontant($montant):self{
        $this->solde += $montant;
        return $this;
    }

    public function bloquerCompte(){ // on peut le faire plus simplement avec le get et le set
        if ($this->compteActif == true){
            $compteActif = false;
            return $compteActif;
            echo '<script>alert("Le compte a été bloqué.")</script>';
        }
        else{
            echo '<script>alert("Le compte est déjà bloqué.")</script>';
        }
    }
    
    // il manque la fonction pour débloquer...
}