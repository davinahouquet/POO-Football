<?php

class Equipe{
    private string $_nomEquipe;
    private int $_dateCreation;
    private Pays $_pays;
    private array $_contrats = [];

    public function __construct(string $nomEquipe, int $dateCreation, Pays $pays)
    {
        $this->_nomEquipe = $nomEquipe;
        $this->_dateCreation = $dateCreation;
        $this->_pays = $pays;
        $this->_pays->setEquipes($this);
    }

     //Getters et setters 
     public function getNomEquipe()
     {
         return $this->_nomEquipe;
     }
 
     public function setNomEquipe(string $nomEquipe)
     {
         $this->_nomEquipe = $nomEquipe;
 
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

   public function addJoueur(Joueur $joueurs){
        return $joueurs->getPrenom()." " .$joueurs()->getNom();
   }

   public function getPays(){
    return $this->_pays;
   }
   public function setPays(Pays $pays){
    $this->_pays = $pays;
   }

   public function getContrats() : array{
    return $this->_contrats;
}
public function setContrats(Contrat $contrat){
    array_push($this->_contrats, $contrat);
}
   public function __toString()
   {
    return $this->_nomEquipe;
   }

    //Méthode pour afficher les contrats d'une équipe
    public function listerJoueursEquipe():string{
        $result = "<div class='container'><div class='uk-child-width-1-3@m uk-grid-small uk-grid-match' uk-grid><div><div id='equipe' class='uk-card uk-card-default uk-card-body'>".$this."<br>";
        foreach($this->_contrats as $contrat){
            $result .= "-".$contrat->getJoueur()." ".$contrat->getJoueur()->getAgeJoueur()."ans<br>";
        }
        return $result."</div></div></div></div><br>";
    }
}
?>