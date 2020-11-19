<?php

$jean = new Manager();
$date = $_POST['date'];
$capacity = $_POST['capacity'];

$availibities = $jean->listAvailibilities($date, $capacity);


?>