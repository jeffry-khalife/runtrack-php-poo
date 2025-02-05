<?php
class Livre {
    private $titre;
    private $auteur;
    private $nombreDePages;
    private $disponible;

    public function __construct($titre, $auteur, $nombreDePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNombreDePages($nombreDePages); 
        $this->disponible = true; 
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

    public function getNombreDePages() {
        return $this->nombreDePages;
    }

    public function setNombreDePages($nombreDePages) {
        if (is_int($nombreDePages) && $nombreDePages > 0) {
            $this->nombreDePages = $nombreDePages;
        } else {
            echo "Erreur : Le nombre de pages n'est pas un entier positif.<br>";
        }
    }

    public function verification() {
        return $this->disponible;
    }

    public function emprunter() {
        if ($this->verification()) {
            $this->disponible = false; 
            echo "Le livre a été emprunté.<br>";
        } else {
            echo "Le livre n'est pas disponible.<br>";
        }
    }

    public function rendre() {
        if (!$this->verification()) {
            $this->disponible = true; 
            echo "Le livre a été rendu.<br>";
        } else {
            echo "Le livre n'a pas été emprunté.<br>";
        }
    }
}

$monLivre = new Livre("L'étranger", "Albert Camus", 800);

echo "Titre: " . $monLivre->getTitre() . "<br>";
echo "Auteur: " . $monLivre->getAuteur() . "<br>";
echo "Nombre de pages: " . $monLivre->getNombreDePages() . "<br>";

if ($monLivre->verification()) {
    echo "Le livre est disponible.<br>";
} else {
    echo "Le livre n'est pas disponible.<br>";
}

$monLivre->emprunter(); 

if ($monLivre->verification()) {
    echo "Le livre est disponible.<br>";
} else {
    echo "Le livre n'est pas disponible.<br>";
}

$monLivre->rendre(); 

if ($monLivre->verification()) {
    echo "Le livre est disponible.<br>";
} else {
    echo "Le livre n'est pas disponible.<br>";
}
?>
