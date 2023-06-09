<?php

class Joueur{
    private string $_prenom;
    private string $_nom;
    private DateTime $_dateNaissance;
    private Pays $_nationalite;
    private array $_contrats = [];

    public function __construct(string $prenom, string $nom, string $dateNaissance, Pays $nationalite)
    {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_dateNaissance = new DateTime($dateNaissance);
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
 
     public function addEquipes(Equipe $equipes){
        return $equipes->getNomEquipe();
     }
     public function getContrats() : array{
        return $this->_contrats;
    }
    public function setContrats(Contrat $contrat){
        array_push($this->_contrats, $contrat);
    }

    public function __toString(){
        return $this->_prenom . " " . $this->_nom;
    }

     //Méthode pour calculer l'âge d'un joueur
     public function getAgeJoueur(){
        $aujourdhui = new DateTime('2023-04-04');
        $diff = $aujourdhui->diff($this->_dateNaissance);
        return $diff->format("%Y");
    }

    //Méthode pour lister toutes les équipes d'un joueur
    public function listerEquipesJoueur(){
        $result = "<div class='container'><div class='uk-child-width-1-3@m uk-grid-small uk-grid-match' uk-grid><div><div id='joueur' class='uk-card uk-card-default uk-card-body'>".$this."<br>";
        foreach($this->_contrats as $contrat){
            $result .= "-".$contrat->getEquipe()." ".$contrat->getDateDebutSaison()."<br>";
        }
        return $result."</div></div></div></div><br>";
    }
}
?>