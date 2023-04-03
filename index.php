<h1>POO Football</h1>

<?php

function chargerClasse($classe)
{
    require $classe . '.php';
}
spl_autoload_register('chargerClasse');

//Instanciation Pays
$france = new Pays ('France');
$espagne = new Pays ('Espagne');
$angleterre = new Pays ('Angleterre');
$italie = new Pays ('Italie');
$bresil = new Pays ('Brésil');
$portugal = new Pays ('Portugal');
$argentine = new Pays ('Argentine');

//Instanciation Equipes
$psg = new Equipe('PSG', '1970');
$racing = new Equipe('Racing Club Strasbourg', '1906');
$barca = new Equipe ('FC Barcelone', '1899');
$Juventus = new Equipe ('Juventus', '1897');

//Instanciation Joueurs
$mbappe = new Joueur('Killian', 'Mbappe', '20-12-1998', $france);
$ronaldo = new Joueur ('Cristiano', 'Ronaldo', '05-02-1985', $portugal);
$messi = new Joueur ('Lionel', 'Messi', '24-06-1987', $argentine);
$neymar = new Joueur ('Neymar', 'Junior', '50-02-1992', $bresil);

?>