<?php 

class Chat extends Animal implements IPeutManger {

    private $coussinets;
    private function miaule() {

    }

    public function mange(Nourriture $nouri) {
        echo $this->prenom . " Miauw, j'aime " . $nouri->gout . " et je mange. Ne dérange pas !! ";
    }

}

?>