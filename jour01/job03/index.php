<?php
class Personne {
    public $nom;
    public $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function SePresenter() {
        return "Je suis " . $this->prenom . " " . $this->nom . "<br>";
    }
}

$personne1 = new Personne("Henrique", "Luis");
$personne2 = new Personne("Rabiot", "Adrien");
$personne3 = new Personne("Rongier", "Valentin");
$personne4 = new Personne("Rulli", "Geronimo");
$personne5 = new Personne("Balerdi", "Leonardo");
$personne6 = new Personne("Pierre-Emile", "Hojberg");



echo $personne1->SePresenter(); 
echo $personne2->SePresenter();
echo $personne3->SePresenter();
echo $personne4->SePresenter();
echo $personne5->SePresenter();
echo $personne6->SePresenter();

?>
