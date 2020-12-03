<?php


class Magicien extends Personnage{

        /* ajout de la function construct */
        function __construct($nom, $force, $niveau) {
            parent::__construct($nom, $force, $niveau);
    
        }

        
    function attaquer(Personnage $personnage){
        
        // echo $this->nom . " attaque " . $personnage->getNom() . "<br>";
        $this->magie($personnage);

}
    
        
        function magie(Personnage $perso){
            return  $this->nom . "Je jette un sort sur " . $perso->getNom();
            $perso->subirDegat(25);
            }
}
?>