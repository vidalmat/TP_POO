<?php

require_once "Attaquant.php";
require_once "Personnage.php";
require_once "archer.php";
require_once "magicien.php";
require_once "guerrier.php";
require_once "Creature.php";



$perso1 = new Archer("Gimli", 12, 100, 1);
// $perso1->race = "Nain";
// $perso1->arme = "Hâche";



$perso2 = new Guerrier("Grogu", 15, 100, 1);
// $perso2->race = "Baby Yoda";
// $perso2->arme = "Boule levier de vitesse";



$perso3 = new Magicien("Joker", 25, 100, 1);
// $perso3->race = "Psychopathe";
// $perso3->arme = "Folie";

$creature = new Creature("Balrog");


var_dump($perso1->getNom());
var_dump($perso2->getNom());
var_dump($perso3->getNom());

var_dump($creature);


echo $perso1->caracteristiques();
echo $perso2->caracteristiques();
echo $perso3->caracteristiques();


$perso1->attaquer($perso3);
$perso2->attaquer($perso1);
$perso3->attaquer($perso2);

echo $perso1->caracteristiques();
echo $perso2->caracteristiques();
echo $perso3->caracteristiques();

$creature->attaquer($perso3);

echo $perso1->caracteristiques();

?>