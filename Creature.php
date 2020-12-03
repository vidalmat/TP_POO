<?php

class Creature implements Attaquant{

    private $race;
    private $sante;

    function__construct($race, $sante = 250){
        $this->race = $race;
        $this->sante = $sante;
    }

    function attaquer(Personnage $perso){
        echo "Créature " . $this->race . " attaque!";
    }

}





?>