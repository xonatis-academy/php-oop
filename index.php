<?php
include 'Animal.php';
include 'Chat.php';
include 'Chien.php';
include 'Table.php';

$table_cuisine = new Table();
$felix = new Chat();
$silicone = new Chat();

$felix->age = 7;
$silicone->age = 5;

var_dump($felix->groupeSanguin);

?>