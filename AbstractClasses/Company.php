<?php


//abstract class AbstractClass
//{
//
//abstract protected function prefixName($name);
//
//}
//
//class ConcreteClass extends AbstractClass
//{
//
//
//   public function prefixName($name, $separator = ".") {
//
//      if ($name == "Pacman") {
//      $prefix = "Mr";
// }    elseif ($name == "Pacwoman") {
//      $prefix = "Mrs";
// }    else {
//$prefix = "";
//}
//return "{$prefix}{$separator} {$name}";
//}
//}
//
//$class = new ConcreteClass;
//echo $class->prefixName("Pacman"), "<br/>";
//echo $class->prefixName("Pacwoman"), "<br/>";


abstract class Car{
    public $title;




    public function __construct($title)
    {
        $this->title = $title;
    }

    abstract public  function intro() : string;

}


class Audi extends Car{

    public function intro(): string
    {
        return "Choose German quality! I'm an $this->title!";
    }

}

class Corola extends Car{


   public function intro(): string
{
    return "Choose America quality! I'm an $this->title!";

   }

}


class Volvo extends Car{

    public function intro(): string
    {
        return "Proud to be Swedish! I'm a $this->title!";

    }

}

class Citroen extends Car{

    public function intro(): string
    {

        return "French extravagance! I'm a $this->title!";
    }

}

$sportaudi = new Audi("Audi");
echo $sportaudi->intro();
print "<br>";

$sportcorola = new Corola("Corola");
echo $sportcorola->intro();
print "<br>";

$sportvolvo = new Volvo("Volvo");
echo $sportvolvo->intro();
print "<br>";

$sportcitroen = new Citroen("Citroen");
echo $sportcitroen->intro();





