<?php

abstract class Animal {

    private $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function __toString(){
        return "Je suis un ".strtolower(get_class($this)).", je m'appelle ". $this->nom;
    }
    
    abstract public function parler();
}