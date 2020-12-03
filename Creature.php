<?php

class Creature implements Attaquant, Cible{

    private $race;
    private $hp;

    function __construct($race, $hp = 250){
        $this->race = $race;
        $this->hp = $hp;
    }

    function attaquer(Cible $cible){
        echo "Créature " . $this->race . " attaque!";
    }


    function degats($degats) {
        $this->vie -= $degats;
        if($this->sante <= 0){
            $this->vie = true;
    }

}
}




?>