<?php



interface Sounds {

    public function makeSound();
    public function makeVolume();


}



class Audionic implements Sounds{

    public function makeSound()
    {
        print "Home theater";
        echo "<br>";
    }
    public function makeVolume()
    {

        print "Best Volume";
        echo "<br>";


    }


}


$soud = new Audionic();
$soud->makeSound();
$soud->makeVolume();



