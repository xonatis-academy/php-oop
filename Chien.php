<?php

class Chien extends Animal implements IPeutManger {

    public $jouet;

    private function aboie() {

    }

    public function joue() {
        $this->jouet->sonne();
    }
}

?>