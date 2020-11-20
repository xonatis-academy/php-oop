<?php
function hello() {
    throw new Exception('Email incorrect');
}

try {
    hello();
} catch(Exception $toto) {
    echo 'Désolé, il y a eu une erreur: '. $toto->getMessage();
}
?>