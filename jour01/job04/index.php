<?php
class Point {
    public $x;
    public $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function afficherLesPoints() {
        echo "Point : (" . $this->x . ", " . $this->y . ")<br>";
    }

    public function afficherX() {
        echo "X : " . $this->x . "<br>";
    }

    public function afficherY() {
        echo "Y : " . $this->y . "<br>";
    }

    public function changerX($nouvellevaleur) {
        $this->x = $nouvellevaleur;
    }

    public function changerY($nouvellevaleur) {
        $this->y = $nouvellevaleur;
    }
}

$point = new Point(2, 3);
$point->afficherLesPoints(); 
$point->afficherX(); 
$point->afficherY(); 
$point->changerX(4);
$point->changerY(5);
$point->afficherLesPoints(); 
?>
