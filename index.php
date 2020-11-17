<?php
include 'Animal.php';
include 'Chat.php';
include 'Chien.php';

include 'Nourriture.php';
include 'Croquette.php';
include 'Os.php';

$nourriture = new Os();


var_dump($nourriture);



$felix = new Chat();
$silicone = new Chat();

$felix->prenom = 'Felix';
$felix->mange();

$silicone->prenom = 'Silicone';
$silicone->mange();

$rex = new Chien();
$rex->prenom = 'Rex';
$rex->mange();

echo 'OK';
?>