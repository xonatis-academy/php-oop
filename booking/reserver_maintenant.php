<?php

$lea = new Customer();

$jean = new Manager();

$availibity = $_POST['dispo'];

$booking = $jean->rent($availibity, $lea);
?>