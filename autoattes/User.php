<?php

namespace App\CompteEpargne {
    class User {

        public $prenom;
    
        public function sePresenter() {
            echo $this->prenom;
        }
    
        public function changerDePrenomEnJean() {
            $this->prenom = 'Jean';
        }
    
        public function changerDePrenomEnCindy() {
            $this->prenom = 'Cindy';
        }
    
        public function changerDePrenomEnSandra() {
            $this->prenom = 'Sandra';
        }
    }
}


?>