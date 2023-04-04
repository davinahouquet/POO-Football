<?php

class Pays{
    private string $_nom;
    private array $_equipes;
    private array $_joueurs;
    

    public function __construct(string $nom)
    {
        $this->_nom = $nom;
        $this->_equipes = [];
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

    public function getEquipes(): array{
        return $this->_equipes = [];
    }

    public function setEquipes(Equipe $equipes){
        array_push($this->_equipes, $equipes);
    }
    public function getJoueurs(): array{
        return $this->_joueurs = [];
    }

    public function setJoueurs(array $joueurs){
        $this->_joueurs = $joueurs;
    }
    
public function __toString(){
    return $this->_nom;
}
    //Fonction pour liste toutes les équipes d'un pays
    public function listerEquipePays(): string {
        $result = "<div class='container'><div class='uk-child-width-1-3@m uk-grid-small uk-grid-match' uk-grid><div><div id='pays' class='uk-card uk-card-default uk-card-body'>".$this."<br>";
        foreach($this->_equipes as $equipe){
            $result .= "-".$equipe->getNomEquipe()."<br>";
        }
        return $result."</div></div></div></div><br>";
 
}
}
?>