<?php

class Aggregator {

    public $provider1;
    public $provider2;

    public function donnerTousLesProfilsDeLHeure() {
        $users = $this->provider2->listerLesUtilisateurs();
        $profiles = [];
        foreach ($users as $user) {
            $profiles[] = $this->provider1->recuperer($user->identifiant);
        }
        return $profiles;
    }

}

?>