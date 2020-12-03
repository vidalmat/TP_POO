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
            return  $this->nom . "Je jette un sort sur " . $perso->getNom();
            $degats = $this->force;
            return  $this->nom . "Je frappe sur " . $perso->getNom();
            if($perso instanceof Guerrier){
                echo "Dégats supplémentaires";
                $degats += 8;
            }
            $perso->subirDegat($degats);
            }
}
?>