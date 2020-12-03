<?php

class Creature implements Attaquant {

    private $race;
    private $hp;

    function __construct($race, $hp = 250){
        $this->race = $race;
        $this->hp = $hp;
    }

    function attaquer(Personnage $perso){
        echo "Créature " . $this->race . " attaque!";
    }

}





?>