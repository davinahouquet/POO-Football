<?php
function chargerClasse($classe)
{
    require $classe . '.php';
}
spl_autoload_register('chargerClasse');

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css">


<h1>POO Football</h1>

<?php

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
$mbappe = new Joueur('Killian', 'Mbappe', '1998-12-20', $france);
$ronaldo = new Joueur ('Cristiano', 'Ronaldo', '1985-02-05', $portugal);
$messi = new Joueur ('Lionel', 'Messi', '1987-06-24', $argentine);
$neymar = new Joueur ('Neymar', 'Junior', '1992-02-05', $bresil);

//Instanciation des contrats

$contratNeymarPSG = new Contrat($neymar, $psg, '2017');
$contratNeymarFCB = new Contrat($neymar, $fcb, '2013');
$contratMbappePSG = new Contrat($mbappe, $psg, '2017');
$contratMessiPSG = new Contrat($messi, $psg, '2021');
$contratMessiFCB = new Contrat($messi, $fcb, '2004');
$contratCRJuv = new Contrat($ronaldo, $juv, '2018');
$contratCRReal = new Contrat($ronaldo, $real, '2009');

//Test des fonctions
echo "Lister les équipe d'un pays : <br><br>";
echo $france->listerEquipePays();
echo $espagne->listerEquipePays();
echo $angleterre->listerEquipePays();
echo $italie->listerEquipePays();
echo $bresil->listerEquipePays();
echo $portugal->listerEquipePays();
echo $argentine->listerEquipePays();

echo "Lister les joueurs d'une équipe : <br><br>";
echo $psg->listerJoueursEquipe();
echo $racing->listerJoueursEquipe();
echo $fcb->listerJoueursEquipe();
echo $juv->listerJoueursEquipe();

echo "Lister les équipes d'un joueur : <br><br>";
echo $mbappe->listerEquipesJoueur();
echo $ronaldo->listerEquipesJoueur();
echo $messi->listerEquipesJoueur();
echo $neymar->listerEquipesJoueur();

?>