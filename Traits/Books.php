<?php

trait Humanity{

    public function HumanWeakness(){

        echo "Man is a very weak man";
        print "<br>";
    }
}


class Car{
    public function Corola(){
        echo "The Corolla is a very good model\n";
        print "<br>";

    }

}

interface Mobile{

    public function iPhone();
}

class Book extends Car implements Mobile {
    use Humanity;
    public function iPhone()
    {

        echo "IPhone best brand\n";
        print "<br>";

    }
}

$bk = new Book();
$bk->HumanWeakness();
$bk->Corola();;
$bk->iPhone();

