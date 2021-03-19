<?php

// abstract class Bus{
//
//
//    public $name;
//
//
//    public function __construct($name)
//    {
//        $this->name = $name;
//    }
//    abstract public function intro() : string;
//}
//
//class Coaster extends Bus{
//    public function intro(): string{
//        return "Choose Iran quality! I'm an $this->name";
//    }
//
//}
//
//$car = new Coaster("Coaster");
//
//print $car->intro();
//echo "<br>";

//
//abstract class Books {
//
//
//    public $title;
//
//
//
//    public function __construct($title)
//    {
//        $this->title = $title;
//
//
//
//    }
//
//    abstract public function intro() : string;
//
//
//    }
//
// class SportsCars extends Books{
//    public function intro(): string{
//
//        return "Choose America quality! $this->title";
//        "<br>";
//
//
//    }
//
// }
//
 class Jhon extends Books{
    public function intro(): string{

        return "Writer ! $this->title";
        echo "<br>";

    }
 }

 class fiveDollar extends  Books{
    public function intro(): string{
        return "Only! $this->title";
        echo "<br>";
    }
 }


$oil= new SportsCars("SportsCars");
print $oil->intro();
echo "<br>";


$hand = new Jhon("Jhon");
print $hand->intro();
echo "<br>";

$invest = new fiveDollar("fiveDollar");
print $invest->intro();
echo "<br>"









?>



