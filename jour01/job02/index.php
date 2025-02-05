<?php
class Operation {
    public $nombre1;
    public $nombre2;

    public function __construct($nombre1 = 1, $nombre2 = 1) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    public function attributs() {
        echo "Nombre 1 = " . $this->nombre1 . "<br>";
        echo "Nombre 2 = " . $this->nombre2 . "<br>";
    }

    public function addition() {
        $resultat = $this->nombre1 + $this->nombre2;
        echo "Résultat de l'addition: " . $resultat;
    }
}

$operation = new Operation();

$operation->attributs();

$operation->addition();

?>
