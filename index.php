<?php
include 'IPeutManger.php';
include 'Animal.php';
include 'Chien.php';
include 'Nourriture.php';
include 'Os.php';
include 'Jouet.php';

$nourriture_carrefour = new Os();
$nourriture_carrefour->gout = 'Os';

// doit implementer IPeuManger pour que cela fonctionne
$rex = new Chien();
$rex->prenom = 'Rex';
$rex->mange($nourriture_carrefour);

$balle = new Jouet();
$balle->nom = 'Balle rebondissante';

$rex->jouet = $balle;
$rex->joue();

echo 'OK';
?>