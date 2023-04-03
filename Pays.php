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
    
    //Fonction pour liste toutes les équipes d'un pays
    public function listerEquipePays(){
        $result = $this.":<br>";
        foreach($this->_equipes as $equipe){
            $result .= "- $equipe.<br>";
        }
        return $result;
    }
    public function __toString(){
        return $this->_nom;
    }
}
?>