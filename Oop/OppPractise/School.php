<?php


class School

{
    public $title;
    public $country;
    public $city;
    public $content;
    public $ceo;


    public function setTitle($title){
        $this->title = $title;
    }
    public function setCountry($country){
        $this->country = $country;
    }
        public function setCity($city){
        $this->city = $city;
    }
    public function setContent($content){
        $this->content = $content;
    }
    public function setCeo($ceo){
        $this->ceo = $ceo;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getCountry(){
        return $this->country;
    }
    public function getCity(){
        return $this->city;
    }
    public function getContent(){
        return $this->content;
    }
    public function getCeo(){
        return $this->ceo;
    }


}



$standard = new School();

$standard->setTitle("standard secondary school");
print $standard->getTitle();
echo "<br>";

$standard->setCountry("pakistan");
print $standard->getCountry();
echo "<br>";

$standard->setCity("karachi");
print $standard->getCity();
echo "<br>";

$standard->setContent("private school");
print $standard->getContent();
echo "<br>";

$standard->setCeo("sir hamza");
print $standard->getCeo();
echo "<br>";




