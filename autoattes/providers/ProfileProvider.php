<?php

class ProfileProvider {

    /**
     * Recupère le profile de l'identifiant
     */
    public function recuperer(string $identifiant) {
        if ($identifiant == 'jean') {
            $profile = new Profile();
            $profile->nom = 'Dupont';
            $profile->prenom = 'Jean';
            $profile->villeNaissance = 'Paris';
            $profile->dateNaissance = '04/02/1978';
            return $profile;
        } else if ($identifiant == 'nathalie') {
            $profile = new Profile();
            $profile->nom = 'Casse';
            $profile->prenom = 'Nathalie';
            $profile->villeNaissance = 'Rouen';
            $profile->dateNaissance = '04/05/1978';
            return $profile;
        }
    }

}

?>