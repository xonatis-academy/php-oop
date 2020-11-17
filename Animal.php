<?php

class Animal {

    public $age;
    public $groupeSanguin;
    protected $taille;
    protected $poids;
    public $prenom;

    public function mange(Nourriture $nouri) {
        echo $this->prenom . " Je mache la nourriture " . $nouri->gout;
        echo $this->prenom . " J'avale la nourriture " . $nouri->gout;
    }

    protected function dort() {
        
    }

}

?>