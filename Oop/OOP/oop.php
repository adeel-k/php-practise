<?php
class Mobile {

    var $price;
    var $car;

    function setPrice($par){
        $this->price = $par;
    }
    function getPrice(){
        echo $this->price ."
";
    }
    function setName($par){
        $this->car = $par;
    }
    function getName(){
        echo $this->car ."
";
    }
}
$Samsung = new Mobile();
$Xiaomi = new Mobile();
$Iphone = new Mobile();
$Samsung->setName( "Mehran" );
$Iphone->setName( "Fx" );
$Xiaomi->setName( "Corolla" );
$Samsung->setPrice( 90000 );
$Iphone->setPrice( 65000 );
$Xiaomi->setPrice( 150000 );

$Samsung->getName();
$Iphone->getName();
$Xiaomi->getName();
$Samsung->getPrice();
$Iphone->getPrice();
$Xiaomi->getPrice();
?>