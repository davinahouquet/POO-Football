<?php

class Equipe{
    private string $_nom;
    private DateTime $_dateCreation;
    private array $_joueurs;

    public function __construct(string $nom, DateTime $dateCreation)
    {
        $this->_nom = $nom;
        $this->_dateCreation = $dateCreation;
        $dateCreation = new DateTime();
        $this->_joueurs = [];
    }
}
?>