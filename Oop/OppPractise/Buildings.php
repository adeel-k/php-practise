<?php


class Buildings
{
    public $title;
    public $location;
    public $floors;
    public $designing;
    public $date;

    public function __construct($title,$location,$floors,$designing,$date)
    {
        $this->title = $title;
        $this->location = $location;
        $this->floors = $floors;
        $this->designing = $designing;
        $this->date = $date;
    }
    public function setTitle($title){
        $this->title = $title;
    }

    public function setLocation($location){
        $this->location = $location;
    }

    public function setFloors($floors){
        $this->floors = $floors;
    }
    public function setDesigning($designing){
        $this->designing = $designing;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function getTitle(){
        return $this->title;

    }
    public function getLocation(){
        return $this->location;
    }
    public function getFloors(){
        return $this->floors;
    }
    public function getDesigning(){
        return $this->designing;
    }
    public function getDate(){
        return $this->date;
    }


}



$zarabuilding = new Buildings("ZaraBuilding","Islamabad","FifteenFloors","Complete","2-3-2021");

print $zarabuilding->title;
echo "<br>";

print $zarabuilding->location;
echo "<br>";

print $zarabuilding->floors;
echo "<br>";

print  $zarabuilding->designing;
echo "<br>";

print $zarabuilding->date;
echo "<br>";
