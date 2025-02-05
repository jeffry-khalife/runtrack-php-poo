<?php
class Cercle {
    public $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function changerRayon($rayonmodifier) {
        $this->rayon = $rayonmodifier;
    }

    public function afficherInfos() {
        echo "Rayon: " . $this->rayon . "<br>";
        echo "Diamètre: " . $this->diametre() . "<br>";
        echo "Circonférence: " . $this->circonférence() . "<br>";
        echo "Aire: " . $this->aire() . "<br><br>";
    }

    public function circonférence() {
        return 2 * pi() * $this->rayon;
    }

    public function aire() {
        return pi() * pow($this->rayon, 2);
    }

    public function diametre() {
        return 2 * $this->rayon;
    }
}

$cercle1 = new Cercle(4);
$cercle2 = new Cercle(7);

echo "Cercle 1 :<br>";
$cercle1->afficherInfos();

echo "Cercle 2 :<br>";
$cercle2->afficherInfos();
?>
