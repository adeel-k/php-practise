<?php

abstract class Animals{

    public $name;



    public function __construct($name){

         $this->name = $name;
    }

    abstract public function intro(): string ;
}


class Gorillas extends Animals{

    public  function intro(): string
    {
        return "Amazing animals!$this->name";

    }
}

class Dog extends Animals{

    public function intro(): string
    {

        return "Very cute animals!$this->name";
    }
}


class Turtle extends Animals{

    public function intro(): string
    {

        return "80 years or so while larger species can easily live over 100 years!$this->name!";
    }
}



class Horse extends Animals{

    public function intro(): string
    {

        return "has a life expectancy of 25 to 30 years!$this->name";
    }
}


$Gorillas = new Gorillas("Gorillas");
print $Gorillas->intro();
echo "<br>";


$Dog = new Dog("Dog");
print $Dog->intro();
echo "<br>";


$Turtle = new Turtle("Turtle");
print  $Turtle->intro();
echo "<br>";


$Horse = new Horse("Horse");
print  $Horse->intro();
echo "<br>";
