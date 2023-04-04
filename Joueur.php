<?php

class Joueur{
    private string $_prenom;
    private string $_nom;
    private string $_dateNaissance;
    private Pays $_nationalite;
    private array $_equipes;

    public function __construct(string $prenom, string $nom, string $dateNaissance, Pays $nationalite)
    {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_dateNaissance = $dateNaissance;
        // $dateNaissance = new DateTime();
        $this->_equipes = [];
        $this->_equipes->addEquipes($this);
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
        return $this->_dateNaissance;
    }

    public function setDateNaissance(string $dateNaissance)
    {
        $this->_dateNaissance = $dateNaissance;

        return $this;
    }

     public function getNationalite(): Pays
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

     public function addEquipes(Equipe $equipes){
        return $equipes->getNom();
     }

     //Méthode pour calculer l'âge d'un joueur

    //  public function getAgeJoueur(){
    //     $aujourdhui=new DateTime();
    //     $diff=$aujourdhui->diff($this->_dateNaissance);
    //     return $diff->format("%Y");

}

?>