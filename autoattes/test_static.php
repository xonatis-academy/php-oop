<?php
include 'User.php';

use App\CompteEpargne\User;

$jean = new User();
$jean->changerDePrenomEnJean();
$sandra = new User();
$sandra->changerDePrenomEnSandra();
$cindy = new User();
$cindy->changerDePrenomEnCindy();

echo $sandra->prenom;

?>

