<?php



class MyClass {
    protected $number = 0;
}

class AnotherClass {
    public function add1() {
        $this->number++;
    }

    public function getNumber() {
        return $this->number;
    }
}

$obj = new AnotherClass();
$obj->add1();
echo "The number is " . $obj->getNumber();
?> 