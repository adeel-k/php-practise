<?php


abstract class Bike
{

    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    public function printOut(){
        print $this->getValue();
    }

}


class SuperStar extends Bike{

    protected function getValue()
    {
     return  "Model 2021 ";
    }
    public function prefixValue($prefix)
    {

        return "{$prefix} Color Black <br> ";
    }
}



class Honda extends Bike{

    protected function getValue()
    {
     return " Model 2021 ";
    }

    public function prefixValue($prefix)
    {

     return "{$prefix} Color Red ";
    }
}


$parts = new SuperStar();
$parts->printOut();
print $parts->prefixValue(' Super Star');



$parts2 = new Honda();
$parts2->printOut();
print $parts2->prefixValue(' Honda');