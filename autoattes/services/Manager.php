<?php

class Manager {

    public $aggregator;
    public $generator;

    public function traiterLHeureCourante() {
        $profiles = $this->aggregator->donnerTousLesProfilsDeLHeure();
        return $this->generator->genererLesAttestations($profiles);
    }

}

?>