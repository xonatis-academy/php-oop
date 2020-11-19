<?php

class AttestationProvider {

    /**
     * 
     * Appel au gouvernement pour générer une attestion en PDF
     * a partir d'un profil et d'une raison
     */
    public function generate(Profile $profile, string $raison) {
        $attestation = new Attestation();
        $attestation->url = 'http://gouv.fr/pdf/' . $profile->prenom . '-' . $raison . '.pdf';
        return $attestation;
    }

}

?>