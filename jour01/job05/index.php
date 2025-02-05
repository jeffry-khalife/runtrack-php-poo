<?php
class Animal {
    public $age;
    public $prenom;

    public function __construct() {
        $this->age = 0;
        $this->prenom = "";
    }

    public function afficherAge() {
        echo "L'animal a " . $this->age . " an(s).<br>";
    }

    public function vieillir() {
        $this->age++;
        echo "L'animal a " . $this->age . " an(s).<br>";
    }


    public function nommer($nom) {
        $this->prenom = $nom;
        echo "Le nom de l'animal est : " . $this->prenom . "<br>";

    }

}

$animal = new Animal();
$animal->afficherAge(); 
$animal->vieillir(); 
$animal->nommer("Rex"); 

?>
