<?php
class Forme {
    public function aire() {
        return 0;
    }
}

class Rectangle extends Forme {
    private $largeur;
    private $hauteur;

    public function __construct($largeur, $hauteur) {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    public function aire() {
        return $this->largeur * $this->hauteur;
    }
}

class Cercle extends Forme {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function aire() {
        return pi() * pow($this->radius, 2); 
    }
}

$rectangle = new Rectangle(6, 8);

echo "L'aire du rectangle est : " . $rectangle->aire() . "<br>"; 

$cercle = new Cercle(7);

echo "L'aire du cercle est : " . $cercle->aire() . "<br>"; 

?>
