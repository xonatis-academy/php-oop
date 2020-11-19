<?php

function habiller($haut, $bas, $chaussures) {
    echo $haut . $bas . $chaussures;
}

function manger($nourriture, $haut, $bas) {
    habiller($bas, $nourriture, $haut);
}

manger('chaussure', 'bas', 'pizza');

?>