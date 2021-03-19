<?php


interface Cars{

    public function makeSound();

}

class Audi implements Cars{

    public function makeSound()
    {
     print "Backfire ";
    }
}


class Ferrari implements Cars{

    public function makeSound()
    {
        echo "Loud Revving";
    }

}


$audi = new Audi();
$ferrari = new Ferrari();
$cars = array($audi,$ferrari);

foreach ($cars as $car){

    $car->makeSound();

}