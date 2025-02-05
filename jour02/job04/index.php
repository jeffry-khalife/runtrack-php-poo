<?php
class Student {
    private $nom;
    private $prenom;
    private $idetudiant;
    private $credits;
    private $level;

    public function __construct($nom, $prenom, $idetudiant) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->idetudiant = $idetudiant;
        $this->credits = 0; 
        $this->level = $this->studentEval(); 
    }

    public function add_credits($credits) {
        if ($credits > 0) {
            $this->credits += $credits;
            $this->level = $this->studentEval(); 
        } else {
            echo "Erreur : Le nombre de crédits doit être supérieur à zéro.<br>";
        }
    }

    private function studentEval() {
        if ($this->credits >= 90) {
            return "Excellent";
        } elseif ($this->credits >= 80) {
            return "Très bien";
        } elseif ($this->credits >= 70) {
            return "Bien";
        } elseif ($this->credits >= 60) {
            return "Passable";
        } else {
            return "Insuffisant";
        }
    }

    public function studentInfo() {
        echo "Nom: " . $this->nom . "<br>";
        echo "Prénom: " . $this->prenom . "<br>";
        echo "Numéro d'étudiant: " . $this->idetudiant . "<br>";
        echo "Niveau: " . $this->level . "<br>";
    }
}

$student = new Student("Doe", "John", 145);
$student->add_credits(8);
$student->add_credits(10);
$student->add_credits(12);
$student->studentInfo();
?>
