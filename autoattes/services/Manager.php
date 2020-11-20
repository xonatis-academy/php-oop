<?php

class Manager {

    public $aggregator;
    public $generator;

    public function __construct($toto1, $toto2) {
        $this->aggregator = $toto1;
        $this->generator = $toto2;
    }

    public function traiterLHeureCourante() {
        $profiles = $this->aggregator->donnerTousLesProfilsDeLHeure();
        return $this->generator->genererLesAttestations($profiles);
    }

}

?>