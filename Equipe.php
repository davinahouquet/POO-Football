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

     //Getters et setters 
     public function getNom()
     {
         return $this->_nom;
     }
 
     public function setNom(string $nom)
     {
         $this->_nom = $nom;
 
         return $this;
     }

    public function getDateCreation()
    {
        return $this->_dateCreation;
    }

    public function setDateCreation(DateTime $dateCreation)
    {
        $this->_dateCreation = $dateCreation;

        return $this;
    }

    public function getJoueurs(){
        return $this->_joueurs = [];
    }
    public function setJoueurs(array $joueurs){
        $this->_joueurs = $joueurs;
    }
}
?>