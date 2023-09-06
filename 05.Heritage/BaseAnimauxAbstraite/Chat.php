<?php

class Chat extends Animal
{
    public function __construct(string $nom)
    {
        parent::__construct($nom);
    }

    public function miauler(): void
    {
        echo ($this->nom . " miaule.<br>");
    }

    public function jouer(): void
    {
        echo ($this->nom . " joue.<br>");
    }

    public function manger(): void
    {
        echo ($this->nom . " mange des croquettes.<br>");
    }

}
