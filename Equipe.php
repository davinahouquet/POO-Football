<?php

class Equipe{
    private string $_nom;
    private string $_dateCreation;
    private array $_joueurs;
    private Pays $_pays;

    public function __construct(string $nom, string $dateCreation, Pays $pays)
    {
        $this->_nom = $nom;
        $this->_dateCreation = $dateCreation;
        // $dateCreation = new DateTime();
        $this->_joueurs = [];
        $this->_pays = $pays;
        $this->_pays->setEquipes($this);
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

    public function setDateCreation(string $dateCreation)
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
   public function addJoueur(Joueur $joueurs){
        return $joueurs->getPrenom()." " .$joueurs()->getNom();
   }

   public function getPays(){
    return $this->_pays;
   }
   public function setPays(Pays $pays){
    $this->_pays = $pays;
   }

}
?>