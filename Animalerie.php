<?php

class Animalerie {

    private $nom;
    private $animaux = array();
      
    public function __construct($nom){
        $this->nom = $nom;
    }
    
    public function ajoutAnimal($animal) {
        // $this->animaux[]= $animal;
        array_push($this->animaux, $animal);
        return $this;
    }

    public function afficherTousAnimaux() {
       foreach($this->animaux as $animal) {
        echo "Je m'appelle ".$animal->getNom().", je suis un ".strtolower(get_Class($animal))." et je fais ".$animal->parler().".<br>"; 
        }
    }

    public function compterAnimaux(){
        $nbAnimaux = 0;
        foreach($this->animaux as $animal) {
        $nbAnimaux++;
        }
        // autre façon de compter les animaux : compter la longueur du tableau
        // $nbAnimaux = sizeof($this->animaux);
        echo "L'animalerie contient ". $nbAnimaux." animaux.";
        return $this;
    }

}