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
$psg = new Equipe('PSG', '1970', $france);
$racing = new Equipe('Racing Club Strasbourg', '1906', $france);
$fcb = new Equipe ('FC Barcelone', '1899', $espagne);
$juv = new Equipe ('Juventus', '1897', $italie);
$real = new Equipe ('Real Madrid', '1902', $espagne);
//Instanciation Joueurs
$mbappe = new Joueur('Killian', 'Mbappe', '20-12-1998', $france);
$ronaldo = new Joueur ('Cristiano', 'Ronaldo', '05-02-1985', $portugal);
$messi = new Joueur ('Lionel', 'Messi', '24-06-1987', $argentine);
$neymar = new Joueur ('Neymar', 'Junior', '50-02-1992', $bresil);

//Instanciation des contrats

$contratNeymarPSG = new Contrat($neymar, $psg, '2017');
$contratNeymarFCB = new Contrat($neymar, $fcb, '2013');
$contratMbappePSG = new Contrat($mbappe, $psg, '2017');
$contratMessiPSG = new Contrat($messi, $psg, '2021');
$contratMessiFCB = new Contrat($messi, $fcb, '2004');
$contratCRJuv = new Contrat($ronaldo, $juv, '2018');
$contartCRReal = new Contrat($ronaldo, $real, '2009');

//Test des fonctions

echo $france->listerEquipePays();
echo $espagne->listerEquipePays();
echo $angleterre->listerEquipePays();
echo $italie->listerEquipePays();
echo $bresil->listerEquipePays();
echo $portugal->listerEquipePays();
echo $argentine->listerEquipePays();

// echo $psg->listerJoueurs();
// echo $racing->listerJoueurs();
// echo $barca->listerJoueurs();
// echo $Juventus->listerJoueurs();

?>