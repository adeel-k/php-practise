<?php

trait Programming {
    public function ProLanguage  () {
        echo 'Hello php';
    }
}

class Php {
    use Programming;
    public function ProLanguage () {
        echo 'Hello php';
    }
}

$obj = new Php();
$obj->ProLanguage();
?>
