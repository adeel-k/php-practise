<?php
class cars {
    public $corola;
    public $color;
    public function __construct($corola, $color) {
        $this->corola = $corola;
        $this->color = $color;
    }
    public function intro() {
        echo "The cars is {$this->corola} and the color is {$this->color}.";
    }
}


class Strawberry extends cars {
    public function message() {
        echo "Am I a cars or a corola? ";
    }
}
$strawberry = new Strawberry("colora", "blue");
$strawberry->message();
$strawberry->intro();
?> 