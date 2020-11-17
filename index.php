<?php
include 'Animal.php';
include 'Chat.php';
include 'Chien.php';

include 'Nourriture.php';
include 'Croquette.php';
include 'Os.php';

$panier1 = new Os();
$panier1->gout = 'Os';

$panier2 = new Croquette();
$panier2->gout = 'Croquette viande';

$felix = new Chat();
$silicone = new Chat();

$felix->prenom = 'Felix';
$felix->mange($panier2);

$silicone->prenom = 'Silicone';
$silicone->mange($panier2);

$rex = new Chien();
$rex->prenom = 'Rex';
$rex->mange($panier1);

echo 'OK';
?>