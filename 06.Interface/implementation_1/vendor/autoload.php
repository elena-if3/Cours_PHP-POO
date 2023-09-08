<?php

// php envoie le nom de la classe à la fonction qui a 

function monAutoload(string $nomClasse)
{
    // echo ("La classe dont on a fait 'new': " . $nomClasse);
    include_once "./classes/" . $nomClasse . ".php";
}

// fixe une fonction d'autoload -> elle sera lancée à chaque fois qu'on fait "new X"
spl_autoload_register("monAutoload");
