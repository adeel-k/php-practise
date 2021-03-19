<?php


class Mobile
{
    public $title;
    public $memory;
    public $camera;


    public function __construct($title,$memory,$camera)
    {
        $this->title = $title;
        $this->memory = $memory;
        $this->camera = $camera;

    }
    public function setTitle($title){
        $this->title = $title;
    }

    public function setMemory($memory){
        $this->memory = $memory;
    }

    public function setCamera($camera){
        $this->camera = $camera;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getMemory(){
        return $this->memory;
    }

    public function getCamera(){
        return $this->camera;
    }


}




$nokiamobile = new Mobile("nokia","8gb","front,back");


print $nokiamobile->title;
echo "<br>";

print $nokiamobile->memory;
echo "<br>";

print $nokiamobile->camera;
echo "<br>";


