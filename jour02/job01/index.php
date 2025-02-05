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

}

$rectangle = new Rectangle(10, 5);

echo "Longueur : " . $rectangle->getLongueur() . "<br>";
echo "Largeur : " . $rectangle->getLargeur() . "<br><br>";

$rectangle->setLongueur(8);
$rectangle->setLargeur(12);

echo "Nouvelle longueur: " . $rectangle->getLongueur() . "<br>";
echo "Nouvelle largeur: " . $rectangle->getLargeur() . "<br>";
?>
