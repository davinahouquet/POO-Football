<?php

class Joueur{
    private string $_prenom;
    private string $_nom;
    private DateTime $_dateNaissance;
    private string $_nationalite;
    private array $_equipes;

    public function __construct(string $prenom, string $nom, string $dateNaissance, Pays $nationalite)
    {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_dateNaissance = $dateNaissance;
        $dateNaissance = new DateTime();
        $this->_nationalite = $nationalite;
        $this->_equipes = [];
    }

     //Getters et setters 
     public function getPrenom()
     {
         return $this->_prenom;
     }
 
     public function setPrenom(string $prenom)
     {
         $this->_prenom = $prenom;
 
         return $this;
     }
     public function getNom()
     {
         return $this->_nom;
     }
 
     public function setNom(string $nom)
     {
         $this->_nom = $nom;
 
         return $this;
     }

     public function getDateNaissance()
    {
        return $this->_dateNaissance->format('d-m-Y');
    }

    public function setDateNaissance(DateTime $dateNaissance)
    {
        $this->_dateNaissance = $dateNaissance;

        return $this;
    }

     public function getNationalite() 
     {
         return $this->_nationalite;
     }
 
     public function setNationalite(Pays $nationalite)
     {
         $this->_nationalite = $nationalite;
 
         return $this;
     }
 
     public function getEquipes(){
        return $this->_equipes = [];
     }
     public function setEquipes(array $equipes){
        $this->_equipes = $equipes;
     }

}