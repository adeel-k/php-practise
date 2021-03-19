<?php

interface Animals {

    public function makeSound();

}

class Cat implements Animals{
    public function makeSound()
    {
     print "Meow";
    }

}

class Dog implements Animals{
    public function makeSound()
    {
     print "Barking";
    }

}

class Mouse implements Animals{

    public function makeSound()
    {
     print "Squeak";
    }
}


$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat,$dog,$mouse);


foreach ($animals as $animal){
    $animal->makeSound();
}