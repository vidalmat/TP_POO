<?php


    class Guerrier extends Personnage{


        function __construct($nom, $force, $niveau) {
            parent::__construct($nom, $force, $niveau);
    
        }


        
    function attaquer(Personnage $personnage){
        
        // echo $this->nom . " attaque " . $personnage->getNom() . "<br>";
        $this->frapper($personnage);

}
    
        
        function frapper(Personnage $perso){
            return  $this->nom . "Je frappe sur " . $perso->getNom();
            $perso->subirDegat(10);
            }
}
?>