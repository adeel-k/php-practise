<?php


interface Dell{
    public function printData();

}
interface Hp{
    public function  getData();

}

interface Lenovo extends Dell , Hp{
    public function addData();

}

class Ricoh implements Lenovo{

    public function printData(){
        print "Hello I Am Dell";
        echo "<br>";

    }

    public function getData(){
        print "Hello I Am Hp";
        echo "<br>";


    }

    public function addData()
    {

     print "Hello I Am Lenovo";
     echo "<br>";

    }


}


$myjob = new Ricoh();

  $myjob->printData();
  $myjob->getData();
  $myjob->addData();
