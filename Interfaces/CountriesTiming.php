<?php

interface Pakistan{
    public function printPTiming();
}

interface India{
    public  function printITiming();

}

interface  America{
    public function printATiming();

}

interface  Africa{
    public function printAfTiming();
}


class PakTiming implements Pakistan{

    public function printPTiming(){

    print "Time Is 12:50 ";
    echo "<br>";


    }

}


class InTiming implements  India{

    public function printITiming(){

        print "Time Is 2:00";
        echo "<br>";
    }

}


class AmTiming implements America
{

    public function printATiming(){

        print "Time Is 2:30";
        echo "<br>";
    }

}


class AfTiming implements Africa{

    public function printAfTiming(){

        print "Time is 1:20";
        echo "<br>";
    }

}


$pt = new  PakTiming();
$pt->printPTiming();
echo "<br>";

$it = new InTiming();
$it->printITiming();
echo "<br>";


$amt = new AmTiming();
$amt->printATiming();
echo "<br>";


$aft = new AfTiming();
$aft->printAfTiming();
echo "<br>";


