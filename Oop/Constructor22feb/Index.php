<?php

class cars{

    public $name;
    public $color;
    private $iron;

    function __construct($name, $color, $iron) {
        $this->name = $name;
        $this->color =$color;
        $this->iron = $iron;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
    function get_iron(){
        return $this->iron;
    }
}

$toyota = new cars("Mehran", "Yellow", "Normal");
echo $toyota->get_name();
echo "<br>";
echo $toyota->get_color();
echo "<br>";
echo $toyota->get_iron();