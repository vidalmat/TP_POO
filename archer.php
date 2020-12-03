<?php

class Archer extends Personnage{

        /* ajout de la function construct */
    function __construct($nom, $force, $niveau) {
        parent::__construct($nom, $force, $niveau);

    }

    
    function attaquer(Personnage $personnage){
        
        // echo $this->nom . " attaque " . $personnage->getNom() . "<br>";
        $this->tirer($personnage);

}

    
    function tirer(Personnage $perso){
        return  $this->nom . "Je tire une flèche sur " . $perso->getNom();
        $perso->subirDegat(15);
        }
    }
    


?>