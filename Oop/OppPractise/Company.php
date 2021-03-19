<?php


class Company
{
    public $title;
    public $model;
    public $colour;
    public $launchdate;
    public $chassisnum;

    public function __construct($title,$model,$colour,$launchdate,$chassisnum)
    {
        $this->title = $title;
        $this->model = $model;
        $this->colour = $colour;
        $this->launchdate = $launchdate;
        $this->chassisnum = $chassisnum;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setModel($model){
        $this->model = $model;
    }

    public function setColour($colour){
        $this->colour = $colour;
    }

    public function setLaunchdate($launchdate){
        $this->launchdate = $launchdate;
    }

    public function setChassisnum($chassisnum){
        $this->chassisnum = $chassisnum;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getModel(){
        return $this->model;
    }

    public function getColour(){
        return $this->colour;
    }

    public function getLaunchdate(){
        return $this->launchdate;
    }
    public function getChassisnum(){
        return $this->chassisnum;
    }

}

$hondabike = new Company("honda","2021","red","12/2/2021","055762");

print $hondabike->title;
echo "<br>";

print $hondabike->model;
echo "<br>";

print $hondabike->colour;
echo "<br>";

print $hondabike->launchdate;
echo "<br>";

print $hondabike->chassisnum;
echo "<br>";