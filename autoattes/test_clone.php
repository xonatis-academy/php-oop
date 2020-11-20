<?php

class Person {
    public $prenom;
    public $nom;

    public function __construct(string $toto1, string $toot2) {
        $this->prenom = $toto1;
        $this->nom = $toot2;
    }
}

$thomas = new Person('Thomas', 'Dupont');

// On fait un clone = nouvel objet avec les memes propriétés (il y a 2 objets)
$robot_thomas_imposteur = clone $thomas;

// On fait une assignation, les 2 variables pointent vers le meme objet (il y en 1 seul)
$pas_un_robot_imposteur = $thomas;

?>