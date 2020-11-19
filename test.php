<?php

// Quelque chose qui IPeutRouler DOIT SAVOIR rouler
// interface = DOIT SAVOIR
interface IPeutRouler {

    function rouler();
    function freiner();
}

// Une Voiture est un TYPE d'objet qui A 
// des roues et des sieges et qui roule
// class = TYPE
// propriétés = A (AVOIR)
// màthodes = FAIRE
// implements = SAIT
class Voiture implements IPeutRouler {
    public $roues;
    public $sieges;

    public function rouler() {

    }

    public function freiner()
    {
        
    }
}

// Une Voiture4x4 EST un TYPE de Voiture
// class = TYPE
// extends = EST (ETRE)
class Voiture4x4 extends Voiture {
    
}

// voiture_maison est un objet, en particulier, c'est un 4x4
$voiture_maison = new Voiture4x4();

// voiture_residence_secondaire est un objet, en particulier, c'est un 4x4
$voiture_residence_secondaire = new Voiture4x4();

?>