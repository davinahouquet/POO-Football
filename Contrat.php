<?php

class Contrat{
    private Joueur $_joueur;
    private Equipe $_equipe;
    private string $_dateDebutSaison;

    public function __construct(Joueur $joueur, Equipe $equipe, string $dateDebutSaison)
    {
        $this->_joueur = $joueur;
        $this->_equipe = $equipe;
        $this->_dateDebutSaison = $dateDebutSaison;
        $this->_joueur->setContrats($this);
        $this->_equipe->setContrats($this);
    }

    public function getJoueur()
    {
        return $this->_joueur;
    }
 
    public function setJoueur(Joueur $joueur)
    {
        $this->_joueur = $joueur;

        return $this;
    }
    
    public function getEquipe()
    {
        return $this->_equipe;
    }

    public function setEquipe(Equipe $equipe)
    {
        $this->_equipe = $equipe;

        return $this;
    }
    
    public function getDateDebutSaison()
    {
        return $this->_dateDebutSaison;
    }

    public function setDateDebutSaison(string $dateDebutSaison)
    {
        $this->_dateDebutSaison = $dateDebutSaison;

        return $this;
    }

    public function __toString(){
        return $this->_joueur . ", " . $this->_equipe . ", " . $this->_dateDebutSaison;
    }
}

?>