<?php


abstract class Books {


    public $name ;



    public  function __construct($name){

        $this->name = $name;

    }

    abstract public function intro() : string;


}



   class Human extends Books{

    public function intro(): string{

        return "Early modern human or anatomically modern 
        human are terms used to distinguish Homo sapiens
         that are anatomically consistent with the range 
         of phenotypes seen in contemporary humans from 
         extinct archaic human species! $this->name!";
    }

}


   class Pc extends  Books{

    public function intro(): string {

        return  "Ernie's 3D Pancakes. This blog was created and is
         independently run by Jeff Erickson, an experienced computer 
         science professor with a penchant for computational theory!$this->name!";
    }

}


   class Animals extends Books{

    public function intro(): string{

        return "Like many animal lovers,
         most of our very favorite childhood books! $this->name";

    }

}

    class Flower extends Books{

    public function intro(): string {

        return "I bought a little flower press before
         living Germany and I use it a lot! $this->name";

    }
}


$human = new Human("Human");
echo $human->intro();
print "<br>";


$pc = new Pc("Pc");
echo $pc->intro();
print "<br>";

$animals = new Animals("Animals");
echo $animals->intro();
print "<br>";

$flower = new Flower("Flower");
echo $flower->intro();
print "<br>";