<?php

class AttestationGenerator {

    public $provider;
    public $raisons = [
        'achats',
        'travail'
    ];

    public function genererLesAttestations($profiles) {
        $attestations = [];
        foreach ($profiles as $profile) {
            foreach ($this->raisons as $raison) {
                $attestations[] = $this->provider->generate($profile, $raison);
            }
        }
        return $attestations;
    }

}

?>