<?php

class Archer extends Personnage{

        /**
     * Permet d'initialiser les paramètres au moment de la création de notre personnage
     * @param string $nom : Son nom
     * @param int $force : Points de force
     * @param int $hp : Points de santé
     * @param int $niveau : Points de niveau
     */
    function __construct($nom, $force, $niveau) {
        parent::__construct($nom, $force, $niveau);

    }


    /**
     * Attaque un personnage en apellant sa méthode spécifique
     * @param Personnage $personnage : Référence personnage "cible" (objet)
     */
    
    function attaquer(Personnage $personnage){
        
        // echo $this->nom . " attaque " . $personnage->getNom() . "<br>";
        $this->tirer($personnage);
        echo "Je tire sur " . $personnage->getNom() . "." . "<br>" ;

}

/**
     * Déclenche l'attaque spécifique de ce sous-type de personnage (ici frapper())
     * @param Personnage $perso : Référence personnage "cible" (objet)
     */

    
    function tirer(Personnage $perso){
       
        $degats = $this->force;
            if($perso instanceof Magicien){
                echo "Dégats supplémentaires" . "<br>";
                $degats += 10;
            }
            $perso->subirDegat($degats);
            return  $this->nom . "Je tire une flèche sur " . $perso->getNom() . "<br>";
        }
    }
    


?>