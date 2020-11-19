<?php

class UserProvider {

    /**
     * 
     * Fournit la liste de tous les utilisateurs
     */
    public function listerLesUtilisateurs() {
        $user1 = new User();
        $user1->identifiant = 'jean';
        $user2 = new User();
        $user2->identifiant = 'nathalie';

        return [
            $user1,
            $user2
        ];
    }

}

?>