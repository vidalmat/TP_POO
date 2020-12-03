<?php


    class Guerrier extends Personnage{


        function __construct($nom, $force, $niveau) {
            parent::__construct($nom, $force, $niveau);
    
        }


        
    function attaquer(Personnage $personnage){
        
        // echo $this->nom . " attaque " . $personnage->getNom() . "<br>";
        $this->frapper($personnage);
        echo "Je frappe sur " . $personnage->getNom() . "." . "<br>" ;

}
    
        
        function frapper(Personnage $perso){
            $degats = $this->force;
            return  $this->nom . "Je frappe sur " . $perso->getNom();
            if($perso instanceof Archer){
                echo "Dégats supplémentaires";
                $degats += 5;
            }
            $perso->subirDegat($degats);
            }
}
?>