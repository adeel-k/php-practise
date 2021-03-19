<?php

interface Hp{
    public function printData();
}

interface Canon{
    public function getData();
}

interface Epson extends Hp , Canon{
    public function addData();
}

class Ricoh implements Epson {


    public function printData(){
        echo "I am printing";
        print "<br>";
    }


    public function getData(){
        echo "I am reading data";
        print "<br>";
    }


    public function addData(){
        echo "I am adding";
        print "<br>";
      }
}


$myobj = new Ricoh();
   $myobj->printData();
   $myobj->getData();
   $myobj->addData();
?>