<?php

class Pays{
    private string $_nom;
    private string $_nationalite;
    private array $_equipes;
    private array $_joueurs;

    public function __construct(string $nom, string $nationalite)
    {
        $this->_nom = $nom;
        $this->_nationalite = $nationalite;
        $this->_equipes = [];
        $this->_joueurs = [];
    }
}
?>