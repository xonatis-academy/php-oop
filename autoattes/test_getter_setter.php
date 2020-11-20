<?php

class Person {
    private $prenom;
    public $nom;

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom(string $nouvelleValeur) {
        if ($nouvelleValeur != 'Thomas' && $nouvelleValeur != 'Sandra') {
            throw new Exception('Une personne ne peut que s appeler Thomas ou Sandra');
        }
        $this->prenom = $nouvelleValeur;
    }

    public function __construct(string $toto1, string $toot2) {
        $this->prenom = $toto1;
        $this->nom = $toot2;
    }
}

$thomas = new Person('Thomas', 'Dupont');
echo $thomas->getPrenom();
// ----
$thomas->setPrenom('Michael');
echo $thomas->getPrenom();
?>

