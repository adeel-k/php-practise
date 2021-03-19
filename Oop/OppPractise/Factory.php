<?php


class Factory
{
    public $title;
    public $product;
    public $location;



    public function setTitle($title){
        $this->title = $title;
    }
    public function setProduct($product){
        $this->product = $product;
    }
    public function setLocation($location){
        $this->location = $location;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getProduct(){
        return $this->product;
    }
    public function getLocation(){
        return $this->location;
    }

}


$iceCreamFactory = new Factory();


$iceCreamFactory->setTitle("iceCream Factory");
print $iceCreamFactory->getTitle();
echo "<br>";

$iceCreamFactory->setProduct("chokeBerry IceCream");
print $iceCreamFactory->getProduct();
echo "<br>";

$iceCreamFactory->setLocation("site Area Karachi");
print $iceCreamFactory->getLocation();
echo "<br>";