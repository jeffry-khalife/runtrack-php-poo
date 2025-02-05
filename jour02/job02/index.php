<?php
class Livre {
    private $titre;
    private $auteur;
    private $nbrepages;

    public function __construct($titre, $auteur, $nbrepages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setnbrepages($nbrepages); 
    }

    public function getTitre() {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    public function getnbrepages() {
        return $this->nbrepages;
    }

    public function setnbrepages($nbrepages) {
        if (is_int($nbrepages) && $nbrepages > 0) {
            $this->nbrepages = $nbrepages;
        } else {
            echo "Erreur : Le nombre de pages n'est pas un entier positif.<br>";
        }
    }
}

$livre = new Livre("L'étranger", "Albert Camus", 800);

echo "Titre: " . $livre->getTitre() . "<br>";
echo "Auteur: " . $livre->getAuteur() . "<br>";
echo "Nombre de pages: " . $livre->getnbrepages() . "<br>";

$livre->setnbrepages(-2); 
$livre->setnbrepages(802); 

echo "Nombre de pages après modification: " . $livre->getnbrepages() . "\n";
?>
