<?php

class Animal {

    public $age;
    public $groupeSanguin;
    protected $taille;
    protected $poids;
    public $prenom;

    public function mange(Nourriture $toto) {
        echo $this->prenom . " Je mache la nourriture " . $toto->gout;
        echo $this->prenom . " J'avale la nourriture " . $toto->gout;
    }

    protected function dort() {
        
    }

}

?>