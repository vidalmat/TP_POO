<?php


abstract class Personnage implements Attaquant, Cible{

    protected $nom;
    protected $force;
    protected $niveau;
    protected $sante;
    protected $vie;
    protected $attaquer;
    protected $cible;
    protected $attaquant;



        /* ajout de la function construct */
    function __construct($nom, $force, $hp = 100, $niveau = 1) {
        $this->nom = $nom;
        $this->force = $force;
        $this->niveau = $niveau;
        $this->sante = $hp;
        $this->vie = false;

    }
        /* */



    function caracteristiques(){
        $etat = ($this->vie)? "mort" : "vivant";
        echo "Bonjour, le personnage " .  $this->nom . " a une force de " .  $this->force . " et un niveau de " . $this->niveau . ", sa santé est de " . $this->sante . "!!" . "<br>";
        echo "Est-il toujours vivant? Réponse :" . $etat . "." . "<br>";
    }

    /* exo numéro 4 */

    abstract function attaquer(Cible $cible);



    function tirer(Personnage $perso){
        return  $this->nom . "Je tire une flèche sur " . $perso->getNom();
        $perso->subirDegat(15);
        }
    


    function magie(Personnage $perso){
        return  $this->nom . "Je jette un sort sur " . $perso->getNom();
        $perso->subirDegat(25);
        }


    function frapper(Personnage $perso){
        return  $this->nom . "Je frappe sur " . $perso->getNom();
        $perso->subirDegat(10);
        }


    function subirDegat(int $degats){
        $this->sante -= $degats;
        if($this->sante <= 0){
            $this->vie = true;
        }
        
    }

    /**/

    /* exo numéro 5 */
    function levelUp(){

        $this->niveau++;

    }


    /**/



    function setNom(string $nomperso){

        $this->nom = $nomperso;
    }

    function getNom(): string{
        return $this->nom;
    }

    function setForce(int $forceperso){

        $this->force = $forceperso;
    }

    function getForce(): int{
        return $this->force;
    }

    function setNiveau(int $niveauperso){

        $this->niveau = $niveauperso;
    }

    function getNiveau(): int{
        return $this->niveau;
    }

    function setSante(int $santeperso){

        $this->sante = $santeperso;
    }

    function getSante(): int{
        return $this->sante;
    }

    function setVie(bool $vieperso){
        $this->vie = $vieperso;
    }

    function isVie(): bool{
        return $this->vie;
    }

}

?>