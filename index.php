<?php

class Chien {

    public $age;
    public $groupeSanguin;
    public $taille;
    public $poids;

    public function mange() {

    }

    public function dort() {

    }

    public function aboie() {

    }
}

class Chat {

    private $coussinets;
    public $age;
    public $groupeSanguin;
    public $taile;
    public $poids;

    public function mange() {

    }

    public function dort() {

    }

    public function miaule() {

    }

}

$felix = new Chat();
var_dump($felix);

?>