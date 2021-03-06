<?php
// Inclusion de modeles (données)
include 'models/Attestation.php';
include 'models/Profile.php';
include 'models/User.php';

// Inclusion des fournisseurs
include 'providers/AttestationProvider.php';
include 'providers/ProfileProvider.php';
include 'providers/UserProvider.php';

// Inclusion de mes services
include 'services/Aggregator.php';
include 'services/AttestationGenerator.php';
include 'services/Manager.php';

// Runtime
$thomas = new AttestationGenerator();
$feli = new Aggregator();

$cindy = new AttestationProvider();
$nath = new ProfileProvider();
$mat = new UserProvider();

$thomas->provider = $cindy;
$feli->provider1 = $nath;
$feli->provider2 = $mat;

$william = new Manager($feli, $thomas);

$attestations = $william->traiterLHeureCourante();

var_dump($attestations);














$coucou = function () {
    $titi = 5;
};

$coucou();
?>