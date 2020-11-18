<?php
include 'Animal.php';
include 'Chien.php';

include 'Nourriture.php';
include 'Os.php';

$panier1 = new Os();
$panier1->gout = 'Os';

// doit implementer IPeuManger pour que cela fonctionne
$rex = new Chien();
$rex->prenom = 'Rex';
$rex->mange($panier1);

echo 'OK';
?>