<?php

class Animal {

    public $age;
    public $groupeSanguin;
    protected $taille;
    protected $poids;
    public $prenom;

    public function mange() {
        echo $this->prenom . " Je mache la nourriture";
        echo $this->prenom . " J'avale la nourriture";
    }

    protected function dort() {
        
    }

}

?>