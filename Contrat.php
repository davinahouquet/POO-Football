<?php

class Contrat{
    private Joueur $_joueur;
    private Equipe $_equipe;
    private DateTime $_dateDebutSaison;

    public function __construct(Joueur $joueur, Equipe $equipe, DateTime $dateDebutSaison)
    {
        $this->_joueur = $joueur;
        $this->_equipe = $equipe;
        $this->_dateDebutSaison = $dateDebutSaison;
        $this->_joueur->setContrats($this);
        $this->_equipe->setContrats($this);
    }
}

?>