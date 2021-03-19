<?php

//definition of trait

trait Honda{
    public function Model(){
        print "1st Model Honda";

    }

}

class SuperStar{
    public function Model2(){
        print "2nd Model SuperStar";
    }

}


class SuperPower extends SuperStar{
    use Honda;
    public function Model(){
        echo "Best Model Honda Storm Model";
        print "<br>";

    }
    public function Model2()
    {
        echo "Super Star Model Nice Model ";
        print "<br>";
    }

}


$parts = new SuperPower();
$parts->Model();
$parts->Model2();
