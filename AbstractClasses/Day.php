<?php
abstract class Days
{
    abstract protected function setValue();
    abstract protected function prefixValue($prefix);


    public function printOut(){
        print $this->setValue() . "\n";
    }
}

class Monday extends Days{

    protected function setValue()
    {

        return "1st Day";
    }

    public function prefixValue($prefix)
    {

        return "{$prefix} and";
    }

}

class Tuesday extends Days{

    public function setValue(){

        return "2nd Day";
    }

    public function prefixValue($prefix)
    {
     return "{$prefix}";

    }

}

$monday = new Monday;
$monday->printOut();
print  $monday->prefixValue('Monday') . "\n";


$tuesday = new Tuesday;
$tuesday->printOut();
print  $tuesday->prefixValue('Tuesday') . "\n";
