<?php

class Animal {

    public $age;
    public $groupeSanguin;
    protected $taille;
    protected $poids;
    public $prenom;

    public function mange() {
        echo "Je mache la nourriture";
        echo "J'avale la nourriture";
    }

    protected function dort() {
        
    }

}

?>