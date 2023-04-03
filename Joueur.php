<?php

class Joueur{
    private string $_prenom;
    private string $_nom;
    private DateTime $_dateNaissance;
    private array $_equipes;

    public function __construct(string $prenom, string $nom, DateTime $dateNaissance)
    {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_dateNaissance = $dateNaissance;
        $dateNaissance = new DateTime();
        $this->_equipes = [];
    }
}