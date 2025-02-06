<?php
class Rectangle {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur() {
        return $this->longueur;
    }

    public function getLargeur() {
        return $this->largeur;
    }

    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    public function perimetre() {
        return 2 * ($this->longueur + $this->largeur);
    }

    public function surface() {
        return $this->longueur * $this->largeur;
    }
}

class Parallelepipede extends Rectangle {
    private $hauteur;

    public function __construct($longueur, $largeur, $hauteur) {
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;
    }

    public function getHauteur() {
        return $this->hauteur;
    }

    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }

    public function volume() {
        return $this->surface() * $this->hauteur;
    }
}

$rectangle = new Rectangle(8, 10);

echo "Périmètre : " . $rectangle->perimetre() . "<br>"; 
echo "Surface  : " . $rectangle->surface() . "<br>"; 

$rectangle->setLongueur(4);
$rectangle->setLargeur(6);

echo "Nouveau périmètre : " . $rectangle->perimetre() . "<br>";
echo "Nouvelle surface : " . $rectangle->surface() . "<br>";

$parallelepipede = new Parallelepipede(6, 8, 10);

echo "Volume du parallélépipède : " . $parallelepipede->volume() . "<br>";

?>
