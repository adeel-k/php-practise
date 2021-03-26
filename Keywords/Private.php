<?php

class MyClass {
    private $number = 0;

    public function add1() {
        $this->number++;
    }

    public function getNumber() {
        return $this->number;
    }
}

$obj = new MyClass();
$obj->add1();
echo "The number is " . $obj->getNumber();
?>