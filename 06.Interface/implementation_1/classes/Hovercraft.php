<?php

class Hovercraft extends Vehicule implements INaviguant, IVolant
{
    // méthodes à implementer héritées de l'interface
    public function claxonner(): void
    {
        print("<h4>POUET POUET!!!</h4>");
    }

    // méthodes à implementer héritées de la classe abstraite
    public function naviguer(): void
    {
        print("<h5>Je suis un hovercraft et je navigue !</h5>");
    }

    public function voler(): void
    {
        print("<h5>Je suis un hovercraft et je vole !</h5>");
    }
}
