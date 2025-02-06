<?php
class Personne {
    protected $age;

    public function __construct($age = 14) {
        $this->age = $age;
    }

    public function afficherAge() {
        echo "J'ai " . $this->age . " ans.<br>";
    }

    public function bonjour() {
        echo "Hello<br>";
    }

    public function modifierAge($nouvel_age) {
        $this->age = $nouvel_age;
    }
}

class Eleve extends Personne {
    public function allerEnCours() {
        echo "Je vais en cours<br>";
    }

    public function afficherAge() {
        echo "J'ai " . $this->age . " ans.<br>";
    }
}

class Professeur {
    private $matiereEnseignee;

    public function __construct($matiereEnseignee) {
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function enseigner() {
        echo "Le cours va commencer<br>";
    }
}

$personne = new Personne();
$personne->afficherAge(); 

$eleve = new Eleve();
$eleve->afficherAge(); 
$eleve->allerEnCours(); 

?>
