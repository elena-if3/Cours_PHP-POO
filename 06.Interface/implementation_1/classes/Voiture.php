<?php

class Voiture extends Vehicule implements IRoulant
{
    // méthodes à implementer héritées de l'interface
    public function claxonner(): void
    {
        print("<h4>POUET POUET!!!</h4>");
    }

    // méthodes à implementer héritées de la classe abstraite
    public function rouler(): void
    {
        print("<h5>Je suis une voiture et je roule sur la route!</h5>");
    }
}
