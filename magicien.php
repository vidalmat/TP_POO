<?php


class Magicien extends Personnage{

        /* ajout de la function construct */
        function __construct($nom, $force, $niveau) {
            parent::__construct($nom, $force, $niveau);
    
        }

        
    function attaquer(Personnage $personnage){
        
        // echo $this->nom . " attaque " . $personnage->getNom() . "<br>";
        $this->magie($personnage);
        echo "Je jette un sort sur " . $personnage->getNom() . "." . "<br>";

}
    
        
        function magie(Personnage $perso){
            
            $degats = $this->force;
            if($perso instanceof Guerrier){
                echo "Dégats supplémentaires" . "<br>";
                $degats += 8;
            }
            $perso->subirDegat($degats);
            return  $this->nom . "Je jette un sort sur " . $perso->getNom() . "<br>";
            }
}
?>