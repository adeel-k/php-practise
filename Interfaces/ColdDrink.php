<?php

interface  SevenUp{

    public function makeTest();

}
class   Coca_cola implements SevenUp{
    public function makeTest(){

        print "Nice test";
        echo "<br>";
    }

}

class   Mirinda implements SevenUp{
    public function makeTest()
    {
       print "Normal test";
       echo  "<br>";

    }

}


class Sprite implements SevenUp{
    public function makeTest()
    {

        print "Fantastic test";
        echo  "<br>";
    }

}


class Fanta implements SevenUp{
    public function makeTest()
    {

        print "Good test";
        echo "<br>";

    }

}


$coca_cola = new Coca_cola();
$mirinda = new Mirinda();
$sprite = new Sprite();
$fanta = new Fanta();
$sevenUp = array($coca_cola,$mirinda,$sprite,$fanta);

foreach($sevenUp as $seven){
    $seven->makeTest();
}

