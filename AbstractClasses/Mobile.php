<?php
abstract class Mobile
{

    abstract protected function getValue();
    abstract protected function prefixValue ($prefix);


    public function printOut(){
        print $this->getValue() . "\n";

        }

}

class QMobile extends Mobile {

    protected function getValue(){

        return "price ";

    }

     public function prefixValue($prefix){

        return "{$prefix}  twenty thousand <br><br>";

    }


}



class Nokia extends Mobile{

    public function     getValue(){

        return "  price2 ";

    }

    public function  prefixValue($prefix)
    {

        return "{$prefix}  twenty five thousand";

    }


}

$mobileprice = new QMobile();
$mobileprice->printOut();
print $mobileprice->prefixValue('QMobile');



$mobileprice2 = new Nokia();
$mobileprice2->printOut();
print $mobileprice2->prefixValue('Nokia');


